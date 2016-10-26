<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'AGO'		=> '%s ago',
	'FROM_NOW'	=> '%s from now',
	'AFTER'		=> '%s after',
	'BEFORE'	=> '%s before',
	'YEAR'		=> array(
		1	=> '1 year',
		2	=> '%d years',
	),
	'MONTH'		=> array(
		1	=> '1 month',
		2	=> '%d months',
	),
	'WEEK'		=> array(
		1	=> '1 week',
		2	=> '%d weeks',
	),
	'DAY'		=> array(
		1	=> '1 day',
		2	=> '%d days',
	),
	'HOUR'		=> array(
		1	=> '1 hour',
		2	=> '%d hours',
	),
	'MINUTE'	=> array(
		1	=> '1 minute',
		2	=> '%d minutes',
	),
	'SECOND'	=> array(
		1	=> '1 second',
		2	=> '%d seconds',
	),

	'JANUARY'	=> 'January',
	'FEBRUARY'	=> 'February',
	'MARCH'		=> 'March',
	'APRIL'		=> 'April',
	'MAY'		=> 'May',
	'JUNE'		=> 'June',
	'JULY'		=> 'July',
	'AUGUST'	=> 'August',
	'SEPTEMBER'	=> 'September',
	'OCTOBER'	=> 'October',
	'NOVEMBER'	=> 'November',
	'DECEMBER'	=> 'December',

	'MONDAY'	=> 'Monday',
	'TUESDAY'	=> 'Tuesday',
	'WEDNESDAY'	=> 'Wednesday',
	'THURSDAY'	=> 'Thursday',
	'FRIDAY'	=> 'Friday',
	'SATURDAY'	=> 'Saturday',
	'SUNDAY'	=> 'Sunday',
));
