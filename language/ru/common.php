<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
* Russian translation by HD321kbps
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
	'RELATIVE_DATES'			=> 'Показывать относительные даты',
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
	'R_AGO'			=> '%s тому назад',
	'R_FROM_NOW'	=> '%s отныне',
	'R_AFTER'		=> '%s спустя',
	'R_BEFORE'		=> '%s прежде чем',
	'R_YEAR'		=> array(
		1	=> '1 год',
		2	=> '%d года',
		3	=> '%d лет',
	),
	'R_MONTH'		=> array(
		1	=> '1 месяц',
		2	=> '%d месяца',
		3	=> '%d месяцев',
	),
	'R_WEEK'		=> array(
		1	=> '1 неделя',
		2	=> '%d недели',
		3	=> '%d недель',
	),
	'R_DAY'		=> array(
		1	=> '1 день',
		2	=> '%d дня',
		3	=> '%d дней',
	),
	'R_HOUR'		=> array(
		1	=> '1 час',
		2	=> '%d часа',
		3	=> '%d часов',
	),
	'R_MINUTE'	=> array(
		1	=> '1 минута',
		2	=> '%d минуты',
		3	=> '%d минут',
	),
	'R_SECOND'	=> array(
		1	=> '1 секунда',
		2	=> '%d секунды',
		3	=> '%d секунд',
	),

	'R_JANUARY'		=> 'Январь',
	'R_FEBRUARY'	=> 'Февраль',
	'R_MARCH'		=> 'Март',
	'R_APRIL'		=> 'Апрель',
	'R_MAY'			=> 'Май',
	'R_JUNE'		=> 'Июнь',
	'R_JULY'		=> 'Июль',
	'R_AUGUST'		=> 'Август',
	'R_SEPTEMBER'	=> 'Сентябрь',
	'R_OCTOBER'		=> 'Октябрь',
	'R_NOVEMBER'	=> 'Ноябрь',
	'R_DECEMBER'	=> 'Декабрь',

	'R_MONDAY'		=> 'Понедельник',
	'R_TUESDAY'		=> 'Вторник',
	'R_WEDNESDAY'	=> 'Среда',
	'R_THURSDAY'	=> 'Четверг',
	'R_FRIDAY'		=> 'Пятница',
	'R_SATURDAY'	=> 'Суббота',
	'R_SUNDAY'		=> 'Воскресенье',
));
