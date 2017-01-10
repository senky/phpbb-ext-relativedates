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
	'AGO'		=> '%s тому назад',
	'FROM_NOW'	=> '%s с этого момента',
	'AFTER'		=> '%s после',
	'BEFORE'	=> '%s до',
	'YEAR'		=> array(
		1	=> '1 год',
		2	=> '%d года',
		3	=> '%d лет',
	),
	'MONTH'		=> array(
		1	=> '1 месяц',
		2	=> '%d месяца',
		3	=> '%d месяцев',
	),
	'WEEK'		=> array(
		1	=> '1 неделя',
		2	=> '%d недели',
		3	=> '%d недель',
	),
	'DAY'		=> array(
		1	=> '1 день',
		2	=> '%d дня',
		3	=> '%d дней',
	),
	'HOUR'		=> array(
		1	=> '1 час',
		2	=> '%d часа',
		3	=> '%d часов',
	),
	'MINUTE'	=> array(
		1	=> '1 минута',
		2	=> '%d минуты',
		3	=> '%d минут',
	),
	'SECOND'	=> array(
		1	=> '1 секунда',
		2	=> '%d секунды',
		3	=> '%d секунд',
	),

	'JANUARY'	=> 'Январь',
	'FEBRUARY'	=> 'Февраль',
	'MARCH'		=> 'Март',
	'APRIL'		=> 'Апрель',
	'MAY'		=> 'Май',
	'JUNE'		=> 'Июнь',
	'JULY'		=> 'Июль',
	'AUGUST'	=> 'Август',
	'SEPTEMBER'	=> 'Сентябрь',
	'OCTOBER'	=> 'Окстябрь',
	'NOVEMBER'	=> 'Ноябрь',
	'DECEMBER'	=> 'Декабрь',

	'MONDAY'	=> 'Понедельник',
	'TUESDAY'	=> 'Вторник',
	'WEDNESDAY'	=> 'Среда',
	'THURSDAY'	=> 'Четверг',
	'FRIDAY'	=> 'Пятница',
	'SATURDAY'	=> 'Суббота',
	'SUNDAY'	=> 'Воскресенье',
));
