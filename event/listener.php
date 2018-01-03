<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\relativedates\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_format_date_override'	=> 'custom_format_date',

			'core.ucp_prefs_personal_data'			=> 'add_relativedates_to_global_settings_data',
			'core.ucp_prefs_personal_update_data'	=> 'add_relativedates_to_global_settings_update',

			'core.text_formatter_s9e_configure_after'	=> 'fix_quote_bbcode',
			'core.text_formatter_s9e_render_before'		=> 'relative_date_switch',

			'core.viewtopic_modify_post_row'	=> 'relative_last_bumped_and_edited_reason',
		);
	}

	/* @var \phpbb\request\request */
	protected $request;

	/* @var \phpbb\user */
	protected $user;

	/* @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\request\request		$request	Request object
	* @param \phpbb\user				$user		User object
	*/
	public function __construct(\phpbb\request\request $request, \phpbb\user $user, \phpbb\template\template $template)
	{
		$this->request = $request;
		$this->user = $user;
		$this->template = $template;
	}

	public function custom_format_date($event)
	{
		$gmepoch = (int) $event['function_arguments'][0];
		$format = isset($event['function_arguments'][1]) ? $event['function_arguments'][1] : '';
		$force_absolute = isset($event['function_arguments'][2]) ? $event['function_arguments'][2] : false;
		$absolute_wrap = isset($event['function_arguments'][3]) ? $event['function_arguments'][3] : true;

		$datetime = $this->user->create_datetime($gmepoch);

		$event['format_date_override'] = $datetime->format($format, $force_absolute, $absolute_wrap);
	}

	public function add_relativedates_to_global_settings_data($event)
	{
		$data = $event['data'];
		$data['relativedates'] = $this->request->variable('relativedates', (bool) $this->user->data['user_relativedates']);
		$event['data'] = $data;

		$this->template->assign_var('S_RELATIVEDATES', $data['relativedates']);
	}

	public function add_relativedates_to_global_settings_update($event)
	{
		$sql_ary = $event['sql_ary'];
		$sql_ary['user_relativedates'] = $event['data']['relativedates'];
		$event['sql_ary'] = $sql_ary;
	}

	public function fix_quote_bbcode($event)
	{
		$tag = $event['configurator']->tags['quote'];
		$tag->template = str_replace(
			'<xsl:value-of select="@date"/>',
			'<xsl:choose>
				<xsl:when test="@relative_date">
					<span title="{@date}">
						<xsl:value-of select="@relative_date"/>
					</span>
				</xsl:when>
				<xsl:otherwise>
					<xsl:value-of select="@date"/>
				</xsl:otherwise>
				</xsl:choose>',
			$tag->template
		);
	}

	public function relative_date_switch($event)
	{
		if ($this->user->data['user_relativedates'])
		{
			$event['xml'] = \s9e\TextFormatter\Utils::replaceAttributes(
				$event['xml'],
				'QUOTE',
				function ($attributes)
				{
					if (!empty($attributes['time']))
					{
						$datetime = $this->user->create_datetime((int) $attributes['time']);

						$attributes['relative_date'] = $datetime->format('', false, false);
						$attributes['date'] = $datetime->format('', true, false);
					}

					return $attributes;
				}
			);
		}
	}

	public function relative_last_bumped_and_edited_reason($event)
	{
		if (!empty($event['post_row']['BUMPED_MESSAGE']))
		{
			$event['post_row']['BUMPED_MESSAGE'] = $this->user->lang('BUMPED_BY', $event['user_cache'][$event['topic_data']['topic_bumper']]['username'], $this->user->format_date($event['topic_data']['topic_last_post_time'], false, true));
		}

		if (!empty($event['post_row']['EDITED_MESSAGE']))
		{
			// Copied from viewtopic.php
			if ($row['post_edit_reason'])
			{
				// User having edited the post also being the post author?
				if (!$event['row']['post_edit_user'] || $event['row']['post_edit_user'] == $event['poster_id'])
				{
					$display_username = get_username_string('full', $event['poster_id'], $event['row']['username'], $event['row']['user_colour'], $event['row']['post_username']);
				}
				else
				{
					$display_username = get_username_string('full', $event['row']['post_edit_user'], $event['post_edit_list'][$event['row']['post_edit_user']]['username'], $event['post_edit_list'][$event['row']['post_edit_user']]['user_colour']);
				}
			}
			else
			{
				if ($event['row']['post_edit_user'] && !isset($event['user_cache'][$event['row']['post_edit_user']]))
				{
					$post_edit_user = $event['post_edit_list'][$event['row']['post_edit_user']];
				}
				else
				{
					$post_edit_user = $event['user_cache'][$event['row']['post_edit_user']];
				}
				// User having edited the post also being the post author?
				if (!$event['row']['post_edit_user'] || $event['row']['post_edit_user'] == $event['poster_id'])
				{
					$display_username = get_username_string('full', $event['poster_id'], $event['row']['username'], $event['row']['user_colour'], $event['row']['post_username']);
				}
				else
				{
					$display_username = get_username_string('full', $event['row']['post_edit_user'], $post_edit_user['username'], $post_edit_user['user_colour']);
				}
			}

			$event['post_row']['EDITED_MESSAGE'] = $user->lang('EDITED_TIMES_TOTAL', (int) $event['row']['post_edit_count'], $display_username, $this->user->format_date($event['row']['post_edit_time'], false, true));
		}
	}
}
