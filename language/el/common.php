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
	'AGO'		=> 'πριν από %s',
	'FROM_NOW'	=> '%s από τώρα',
	'AFTER'		=> '%s μετά',
	'BEFORE'	=> '%s πριν',
	'YEAR'		=> array(
		1	=> '1 χρόνο',
		2	=> '%d χρόνια',
	),
	'MONTH'		=> array(
		1	=> '1 μήνα',
		2	=> '%d μήνες',
	),
	'WEEK'		=> array(
		1	=> '1 εβδομάδα',
		2	=> '%d εβδομάδες',
	),
	'DAY'		=> array(
		1	=> '1 μέρα',
		2	=> '%d μέρες',
	),
	'HOUR'		=> array(
		1	=> '1 ώρα',
		2	=> '%d ώρες',
	),
	'MINUTE'	=> array(
		1	=> '1 λεπτό',
		2	=> '%d λεπτά',
	),
	'SECOND'	=> array(
		1	=> '1 δευτερόλεπτο',
		2	=> '%d δευτερόλεπτα',
	),

	'JANUARY'	=> 'Ιανουάρις',
	'FEBRUARY'	=> 'Φεβρουάριος',
	'MARCH'		=> 'Μάρτιος',
	'APRIL'		=> 'Απρίλιος',
	'MAY'		=> 'Μάιος',
	'JUNE'		=> 'Ιούνιος',
	'JULY'		=> 'Ιούλιος',
	'AUGUST'	=> 'Αύγουστος',
	'SEPTEMBER'	=> 'Σεπτέμβριος',
	'OCTOBER'	=> 'Οκτώβριος',
	'NOVEMBER'	=> 'Νοέμβριος',
	'DECEMBER'	=> 'Δεκέμβριος',

	'MONDAY'	=> 'Δευτέρα',
	'TUESDAY'	=> 'Τρίτη',
	'WEDNESDAY'	=> 'Τετάρτη',
	'THURSDAY'	=> 'Πέμπτη',
	'FRIDAY'	=> 'Παρασκευή',
	'SATURDAY'	=> 'Σαββάτο',
	'SUNDAY'	=> 'Κυριακή',
));
