<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'RELATIVE_DATES'	=> 'عرض التواريخ النسبية ',

	'R_AGO'			=> 'منذ %s',
	'R_FROM_NOW'	=> '%s من الآن',
	'R_AFTER'		=> 'بعد %s',
	'R_BEFORE'		=> 'قبل %s',
	'R_YEAR'		=> array(
		1	=> '1 سنة',
		2	=> '%d سنوات',
	),
	'R_MONTH'		=> array(
		1	=> '1 شهر',
		2	=> '%d شهور',
	),
	'R_WEEK'		=> array(
		1	=> '1 أسبوع',
		2	=> '%d أسابيع',
	),
	'R_DAY'			=> array(
		1	=> '1 يوم',
		2	=> '%d أيام',
	),
	'R_HOUR'		=> array(
		1	=> '1 ساعة',
		2	=> '%d ساعات',
	),
	'R_MINUTE'		=> array(
		1	=> '1 دقيقة',
		2	=> '%d دقائق',
	),
	'R_SECOND'		=> array(
		1	=> '1 ثانية',
		2	=> '%d ثواني',
	),

	'R_JANUARY'		=> 'يناير',
	'R_FEBRUARY'	=> 'فبراير',
	'R_MARCH'		=> 'مارس',
	'R_APRIL'		=> 'أبريل',
	'R_MAY'			=> 'مايو',
	'R_JUNE'		=> 'يونيو',
	'R_JULY'		=> 'يوليو',
	'R_AUGUST'		=> 'أغسطس',
	'R_SEPTEMBER'	=> 'سبتمبر',
	'R_OCTOBER'		=> 'أكتوبر',
	'R_NOVEMBER'	=> 'نوفمبر',
	'R_DECEMBER'	=> 'ديسمبر',

	'R_MONDAY'		=> 'الأثنين',
	'R_TUESDAY'		=> 'الثلاثاء',
	'R_WEDNESDAY'	=> 'الأربعاء',
	'R_THURSDAY'	=> 'الخميس',
	'R_FRIDAY'		=> 'الجمعة',
	'R_SATURDAY'	=> 'السبت',
	'R_SUNDAY'		=> 'الأحد',
));
