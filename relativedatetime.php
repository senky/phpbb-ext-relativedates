<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\relativedates;

use Jenssegers\Date\Date;

class relativedatetime extends Date
{
	static private $format;
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
	* @param \phpbb\user|string		$user_or_time		phpBB User objec or String in a format accepted by strtotime()
	* @param string|\DateTimeZone	$time_or_timezone	String in a format accepted by strtotime() or Time zone of the time
	* @param \DateTimeZone			$timezone			Time zone of the time
	*/
	public function __construct($user_or_time, $time_or_timezone = 'now', \DateTimeZone $timezone = null)
	{
		if ($user_or_time instanceof \phpbb\user)
		{
			// Store default format. We have to decode it, because php's \DateTime::format() would
			// parse sanitized chars, i.e. in &quot; 'u', 'o' and 't' all would be parsed.
			// We will sanatize it again before output.
			self::$format = htmlspecialchars_decode($user_or_time->date_format);

			// This class uses language definitions in \Jenssegers\Date\Lang\*
			parent::setLocale($user_or_time->lang_name);

			// Default to user timezone
			$timezone = $timezone ?: $user_or_time->timezone;

			parent::__construct($time_or_timezone, $timezone);
		}
		else
		{
			parent::__construct($user_or_time, $time_or_timezone);
		}
	}

	public function format($format = '', $force_absolute = false)
	{
		if ($force_absolute)
		{
			// Sanitize output, because it has been decoded to ensure \DateTime::format() parses only
			// requisite chars.
			return htmlspecialchars(parent::format($format ?: self::$format));
		}
		else
		{
			// Print relative date. Ensure it also contains absolute date displayed on mouseover.
			return '<span title="' . htmlspecialchars(parent::format($format ?: self::$format)) . '">' . $this->diffForHumans() . '</span>';
		}
	}
}
