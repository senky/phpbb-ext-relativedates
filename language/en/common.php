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
	'RELATIVE_DATES'	=> 'Show relative dates',

	'R_AGO'			=> '%s ago',
	'R_FROM_NOW'	=> '%s from now',
	'R_AFTER'		=> '%s after',
	'R_BEFORE'		=> '%s before',
	'R_YEAR'		=> array(
		1	=> '1 year',
		2	=> '%d years',
	),
	'R_MONTH'		=> array(
		1	=> '1 month',
		2	=> '%d months',
	),
	'R_WEEK'		=> array(
		1	=> '1 week',
		2	=> '%d weeks',
	),
	'R_DAY'			=> array(
		1	=> '1 day',
		2	=> '%d days',
	),
	'R_HOUR'		=> array(
		1	=> '1 hour',
		2	=> '%d hours',
	),
	'R_MINUTE'		=> array(
		1	=> '1 minute',
		2	=> '%d minutes',
	),
	'R_SECOND'		=> array(
		1	=> '1 second',
		2	=> '%d seconds',
	),

	'R_JANUARY'		=> 'January',
	'R_FEBRUARY'	=> 'February',
	'R_MARCH'		=> 'March',
	'R_APRIL'		=> 'April',
	'R_MAY'			=> 'May',
	'R_JUNE'		=> 'June',
	'R_JULY'		=> 'July',
	'R_AUGUST'		=> 'August',
	'R_SEPTEMBER'	=> 'September',
	'R_OCTOBER'		=> 'October',
	'R_NOVEMBER'	=> 'November',
	'R_DECEMBER'	=> 'December',

	'R_MONDAY'		=> 'Monday',
	'R_TUESDAY'		=> 'Tuesday',
	'R_WEDNESDAY'	=> 'Wednesday',
	'R_THURSDAY'	=> 'Thursday',
	'R_FRIDAY'		=> 'Friday',
	'R_SATURDAY'	=> 'Saturday',
	'R_SUNDAY'		=> 'Sunday',
));
