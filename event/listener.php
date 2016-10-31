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
	* @param \phpbb\controller\request	$request		Request object
	* @param \phpbb\user				$user			User object
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
}
