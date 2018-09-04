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
	'RELATIVE_DATES'			=> 'Show relative dates',
	'RELATIVE_DATES_MAX'		=> 'Maximum age of relative dates',
	'RELATIVE_DATES_MAX_DESC'	=> 'Every date older than specified here will be automatically in absolute format. Set to 0 disable.',
	'R_DAYS'					=> 'day(s)',
	'R_MONTHS'					=> 'month(s)',
	'R_YEARS'					=> 'year(s)',

	'R_EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Last edited by %2$s %3$s, edited %1$d time in total.',
		2	=> 'Last edited by %2$s %3$s, edited %1$d times in total.',
	),
	'R_BUMPED_MESSAGE'	=> 'Last bumped by %1$s %2$s.',

	'R_NOW'			=> 'just now',
	'R_AGO'			=> 'πριν από %s',
	'R_FROM_NOW'	=> '%s από τώρα',
	'R_AFTER'		=> '%s μετά',
	'R_BEFORE'		=> '%s πριν',
	'R_YEAR'		=> array(
		1	=> '1 χρόνο',
		2	=> '%d χρόνια',
	),
	'R_MONTH'		=> array(
		1	=> '1 μήνα',
		2	=> '%d μήνες',
	),
	'R_WEEK'		=> array(
		1	=> '1 εβδομάδα',
		2	=> '%d εβδομάδες',
	),
	'R_DAY'			=> array(
		1	=> '1 μέρα',
		2	=> '%d μέρες',
	),
	'R_HOUR'		=> array(
		1	=> '1 ώρα',
		2	=> '%d ώρες',
	),
	'R_MINUTE'		=> array(
		1	=> '1 λεπτό',
		2	=> '%d λεπτά',
	),
	'R_SECOND'		=> array(
		1	=> '1 δευτερόλεπτο',
		2	=> '%d δευτερόλεπτα',
	),

	'R_JANUARY'		=> 'Ιανουάρις',
	'R_FEBRUARY'	=> 'Φεβρουάριος',
	'R_MARCH'		=> 'Μάρτιος',
	'R_APRIL'		=> 'Απρίλιος',
	'R_MAY'			=> 'Μάιος',
	'R_JUNE'		=> 'Ιούνιος',
	'R_JULY'		=> 'Ιούλιος',
	'R_AUGUST'		=> 'Αύγουστος',
	'R_SEPTEMBER'	=> 'Σεπτέμβριος',
	'R_OCTOBER'		=> 'Οκτώβριος',
	'R_NOVEMBER'	=> 'Νοέμβριος',
	'R_DECEMBER'	=> 'Δεκέμβριος',

	'R_MONDAY'		=> 'Δευτέρα',
	'R_TUESDAY'		=> 'Τρίτη',
	'R_WEDNESDAY'	=> 'Τετάρτη',
	'R_THURSDAY'	=> 'Πέμπτη',
	'R_FRIDAY'		=> 'Παρασκευή',
	'R_SATURDAY'	=> 'Σαββάτο',
	'R_SUNDAY'		=> 'Κυριακή',
));
