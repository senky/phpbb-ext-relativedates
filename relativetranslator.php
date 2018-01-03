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
		$params = $this->get_params($id, $parameters);
		// `$user->lang()` returns warning when there are not enough params for `sprintf`.
		// In our situation, date class always tries to call this method before `transChoice`
		// and expects `$id` to be returned in fail case. We need to mimic this behaviour.
		$translation = @call_user_func_array([$this->user, 'lang'], $params);

		// Was translation successful?
		return $this->verify_translation($translation, $id);
	}

	/**
	* {@inheritdoc}
	*/
	public function transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null)
	{
		$params = $this->get_params($id, $parameters);
		// 0 minutes ago. We will translate this into "R_NOW".
		if (isset($params[1]) && $params[1] == 0)
		{
			$params[0] = 'R_NOW';
		}
		$translation = call_user_func_array([$this->user, 'lang'], $params);

		// Was translation successful?
		return $this->verify_translation($translation, $id);
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

	/**
	 * Return correct language string: phpBB or Jenssegers\Date
	 *
	 * @param	string	$id			Lang entry ID
	 * @param	array	$parameters	Lang entry parameters
	 *
	 * @return	array	\phpbb\user::lang parameters array
	 */
	private function get_params($id, $parameters)
	{
		if ($id == strtoupper($id)) // phpBB call
		{
			return array_merge([$id], array_values($parameters));
		}
		else // Jenssegers\Date call
		{
			return array_merge(['R_' . strtoupper($id)], array_values($parameters));
		}
	}

	/**
	 * Verifies, if translation was successful in singular form.
	 * Since we prefix our language keys with "R_", we need to
	 * check for them as well.
	 *
	 * @param	string	$translation	Translated string
	 * @param	string	$id				Lang entry ID
	 *
	 * @return	string	translated text or language string ID
	 */
	private function verify_translation($translation, $id)
	{
		if ($translation == strtoupper($id) || substr($translation, 0, 2) == 'R_')
		{
			return $id;
		}
		else
		{
			return $translation;
		}
	}
}
