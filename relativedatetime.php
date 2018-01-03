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

use Jenssegers\Date\Date;

class relativedatetime extends Date
{
	/**
	* @var	string	Default date format
	*/
	static private $format;

	/**
	* @var	\phpbb\user	phpBB User object
	*/
	private $user;

	/**
	 * @var	int	Max age in timestamp
	 */
	private $max_age;
	/**
	 * @var	int	Current time. This variable is used to calculate if max age was exceeded, since it can be approximated.
	 */
	private $current_time;

	/**
	* Constructs a new instance of \Jenssegers\Date\Date, expanded to include an argument to inject
	* the user context and modify the timezone to the users selected timezone if one is not set.
	*
	* Method is quite confusing, but Carbon initializes itself multiple times, which calls this method,
	* but with different params: time and timezone only, excluding user. So we need to hack it by
	* verifying, that first param is instance of \phpbb\user.
	*
	* Please note, that it is guaranteed, that this constructor is called first time with \phpbb\user
	* param, so we can use that to set default output format and locale.
	*
	* @param \phpbb\user|string		$user_or_time		phpBB User object or String in a format accepted by strtotime()
	* @param string|\DateTimeZone	$time_or_timezone	String in a format accepted by strtotime() or Time zone of the time
	* @param \DateTimeZone			$timezone			Time zone of the time
	*/
	public function __construct($user_or_time, $time_or_timezone = 'now', \DateTimeZone $timezone = null)
	{
		if ($user_or_time instanceof \phpbb\user)
		{
			$this->user = $user_or_time;

			// Store default format. We have to decode it, because php's \DateTime::format() would
			// parse sanitized chars, i.e. in &quot; 'u', 'o' and 't' all would be parsed.
			// We will sanatize it again before output.
			self::$format = htmlspecialchars_decode($this->user->date_format);

			// Set custom language
			$this->user->add_lang_ext('senky/relativedates', 'common');
			$lang = new relativetranslator($this->user);
			parent::setTranslator($lang);

			// Default to user timezone
			$timezone = $timezone ?: $this->user->timezone;

			$this->max_age = $this->user->data['user_relativedates_number'] * $this->user->data['user_relativedates_multiplier'];
			$this->current_time = time();

			parent::__construct($time_or_timezone, $timezone);
		}
		else
		{
			parent::__construct($user_or_time, $time_or_timezone);
		}
	}

	public function format($format = '', $force_absolute = false, $absolute_wrap = true)
	{
		if ($this->max_age && $this->getTimestamp() + $this->max_age < $this->current_time)
		{
			$force_absolute = true;
		}

		if (!$this->user->data['user_relativedates'] || $force_absolute)
		{
			// Sanitize output, because it has been decoded to ensure \DateTime::format() parses only
			// requisite chars.
			return htmlspecialchars(parent::format($format ?: self::$format));
		}
		else
		{
			// Print relative date. Ensure it also contains absolute date displayed on mouseover if not forbidden.
			if ($absolute_wrap)
			{
				return '<span title="' . htmlspecialchars(parent::format($format ?: self::$format)) . '">' . $this->diffForHumans() . '</span>';
			}
			else
			{
				return $this->diffForHumans();
			}
		}
	}
}
