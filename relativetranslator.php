<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\relativedates;

use Symfony\Component\Translation\TranslatorInterface;

class relativetranslator implements TranslatorInterface
{
	/**
	* @var	\phpbb\user	User object
	*/
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\user	$user	phpBB User object
	*/
	public function __construct(\phpbb\user $user)
	{
		$this->user = $user;
	}

	/**
	* {@inheritdoc}
	*/
	public function trans($id, array $parameters = array(), $domain = null, $locale = null)
	{
		$params = array_merge([strtoupper($id)], array_values($parameters));
		// `$user->lang()` returns warning when there are not enough params for `sprintf`.
		// In our situation, date class always tries to call this method before `transChoice`
		// and expects `$id` to be returned in fail case. We need to mimic this behaviour.
		$translation = @call_user_func_array([$this->user, 'lang'], $params);

		// Was translation successful?
		if ($translation == strtoupper($id))
		{
			return $id;
		}
		else
		{
			return $translation;
		}
	}

	/**
	* {@inheritdoc}
	*/
	public function transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null)
	{
		$params = array_merge([strtoupper($id)], array_values($parameters));
		$translation = call_user_func_array([$this->user, 'lang'], $params);

		// Was translation successful?
		if ($translation == strtoupper($id))
		{
			return $id;
		}
		else
		{
			return $translation;
		}
	}

	/**
	* {@inheritdoc}
	*/
	public function setLocale($locale)
	{
		// sorry
	}

	/**
	* {@inheritdoc}
	*/
	public function getLocale()
	{
		return $this->user->get_iso_lang_id();
	}
}
