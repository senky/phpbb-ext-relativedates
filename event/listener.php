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
			'core.ucp_prefs_personal_data'			=> 'add_relativedates_to_global_settings_data',
			'core.ucp_prefs_personal_update_data'	=> 'add_relativedates_to_global_settings_update',

			'core.text_formatter_s9e_configure_after'	=> 'fix_quote_bbcode',
			'core.text_formatter_s9e_render_before'		=> 'relative_date_switch',
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
					if (isset($attributes['time']))
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
}
