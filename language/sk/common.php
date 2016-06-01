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
	'AGO'		=> 'pred %s',
	'FROM_NOW'	=> 'za %s',
	'AFTER'		=> '%s neskôr',
	'BEFORE'	=> '%s predtým',
	'YEAR'		=> array(
		1	=> 'rok',
		2	=> '%d roky',
		3	=> '%d rokov',
	),
	'MONTH'		=> array(
		1	=> 'mesiac',
		2	=> '%d mesiace',
		3	=> '%d mesiacov',
	),
	'WEEK'		=> array(
		1	=> 'týždeň',
		2	=> '%d týždne',
		3	=> '%d týždňov',
	),
	'DAY'		=> array(
		1	=> 'deň',
		2	=> '%d dni',
		3	=> '%d dní',
	),
	'HOUR'		=> array(
		1	=> 'hodinu',
		2	=> '%d hodiny',
		3	=> '%d hodín',
	),
	'MINUTE'	=> array(
		1	=> 'minútu',
		2	=> '%d minúty',
		3	=> '%d minút',
	),
	'SECOND'	=> array(
		1	=> 'sekundu',
		2	=> '%d sekundy',
		3	=> '%d sekúnd',
	),

	'JANUARY'	=> 'Január',
	'FEBRUARY'	=> 'Február',
	'MARCH'		=> 'Marec',
	'APRIL'		=> 'Apríl',
	'MAY'		=> 'Máj',
	'JUNE'		=> 'Jún',
	'JULY'		=> 'Júl',
	'AUGUST'	=> 'August',
	'SEPTEMBER'	=> 'September',
	'OCTOBER'	=> 'Október',
	'NOVEMBER'	=> 'November',
	'DECEMBER'	=> 'December',

	'MONDAY'	=> 'Pondelok',
	'TUESDAY'	=> 'Utorok',
	'WEDNESDAY'	=> 'Streda',
	'THURSDAY'	=> 'Štvrtok',
	'FRIDAY'	=> 'Piatok',
	'SATURDAY'	=> 'Sobota',
	'SUNDAY'	=> 'Nedeľa',

	'YEAR_AGO'	=> array(
		1	=> 'rokom',
		2	=> '%d rokmi',
		3	=> '%d rokmi',
	),
	'MONTH_AGO'	=> array(
		1	=> 'mesiacom',
		2	=> '%d mesiacmi',
		3	=> '%d mesiacmi',
	),
	'WEEK_AGO'	=> array(
		1	=> 'týždňom',
		2	=> '%d týždňami',
		3	=> '%d týždňami',
	),
	'DAY_AGO'	=> array(
		1	=> 'dňom',
		2	=> '%d dňami',
		3	=> '%d dňami',
	),
	'HOUR_AGO'	=> array(
		1	=> 'hodinou',
		2	=> '%d hodinami',
		3	=> '%d hodinami',
	),
	'MINUTE_AGO'	=> array(
		1	=> 'minútou',
		2	=> '%d minútami',
		3	=> '%d minútami',
	),
	'SECOND_AGO'	=> array(
		1	=> 'sekundou',
		2	=> '%d sekundami',
		3	=> '%d sekundami',
	),
));
