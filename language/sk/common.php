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
	'R_AGO'			=> 'pred %s',
	'R_FROM_NOW'	=> 'za %s',
	'R_AFTER'		=> '%s neskôr',
	'R_BEFORE'		=> '%s predtým',
	'R_YEAR'		=> array(
		1	=> 'rok',
		2	=> '%d roky',
		3	=> '%d rokov',
	),
	'R_MONTH'		=> array(
		1	=> 'mesiac',
		2	=> '%d mesiace',
		3	=> '%d mesiacov',
	),
	'R_WEEK'		=> array(
		1	=> 'týždeň',
		2	=> '%d týždne',
		3	=> '%d týždňov',
	),
	'R_DAY'			=> array(
		1	=> 'deň',
		2	=> '%d dni',
		3	=> '%d dní',
	),
	'R_HOUR'		=> array(
		1	=> 'hodinu',
		2	=> '%d hodiny',
		3	=> '%d hodín',
	),
	'R_MINUTE'		=> array(
		1	=> 'minútu',
		2	=> '%d minúty',
		3	=> '%d minút',
	),
	'R_SECOND'		=> array(
		1	=> 'sekundu',
		2	=> '%d sekundy',
		3	=> '%d sekúnd',
	),

	'R_JANUARY'		=> 'Január',
	'R_FEBRUARY'	=> 'Február',
	'R_MARCH'		=> 'Marec',
	'R_APRIL'		=> 'Apríl',
	'R_MAY'			=> 'Máj',
	'R_JUNE'		=> 'Jún',
	'R_JULY'		=> 'Júl',
	'R_AUGUST'		=> 'August',
	'R_SEPTEMBER'	=> 'September',
	'R_OCTOBER'		=> 'Október',
	'R_NOVEMBER'	=> 'November',
	'R_DECEMBER'	=> 'December',

	'R_MONDAY'		=> 'Pondelok',
	'R_TUESDAY'		=> 'Utorok',
	'R_WEDNESDAY'	=> 'Streda',
	'R_THURSDAY'	=> 'Štvrtok',
	'R_FRIDAY'		=> 'Piatok',
	'R_SATURDAY'	=> 'Sobota',
	'R_SUNDAY'		=> 'Nedeľa',

	'R_YEAR_AGO'	=> array(
		1	=> 'rokom',
		2	=> '%d rokmi',
		3	=> '%d rokmi',
	),
	'R_MONTH_AGO'	=> array(
		1	=> 'mesiacom',
		2	=> '%d mesiacmi',
		3	=> '%d mesiacmi',
	),
	'R_WEEK_AGO'	=> array(
		1	=> 'týždňom',
		2	=> '%d týždňami',
		3	=> '%d týždňami',
	),
	'R_DAY_AGO'		=> array(
		1	=> 'dňom',
		2	=> '%d dňami',
		3	=> '%d dňami',
	),
	'R_HOUR_AGO'	=> array(
		1	=> 'hodinou',
		2	=> '%d hodinami',
		3	=> '%d hodinami',
	),
	'R_MINUTE_AGO'	=> array(
		1	=> 'minútou',
		2	=> '%d minútami',
		3	=> '%d minútami',
	),
	'R_SECOND_AGO'	=> array(
		1	=> 'sekundou',
		2	=> '%d sekundami',
		3	=> '%d sekundami',
	),
));
