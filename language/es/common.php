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
	'RELATIVE_DATES'			=> 'Mostrar fechas relativas',
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
	'R_AGO'			=> 'hace %s',
	'R_FROM_NOW'	=> '%s a partir de ahora',
	'R_AFTER'		=> '%s después',
	'R_BEFORE'		=> '%s antes',
	'R_YEAR'		=> array(
		1	=> '1 year',
		2	=> '%d years',
	),
	'R_MONTH'		=> array(
		1	=> '1 mes',
		2	=> '%d meses',
	),
	'R_WEEK'		=> array(
		1	=> '1 semana',
		2	=> '%d semanas',
	),
	'R_DAY'			=> array(
		1	=> '1 día',
		2	=> '%d días',
	),
	'R_HOUR'		=> array(
		1	=> '1 hora',
		2	=> '%d horas',
	),
	'R_MINUTE'		=> array(
		1	=> '1 minuto',
		2	=> '%d minutos',
	),
	'R_SECOND'		=> array(
		1	=> '1 segundo',
		2	=> '%d segundos',
	),

	'R_JANUARY'		=> 'Enero',
	'R_FEBRUARY'	=> 'Febrero',
	'R_MARCH'		=> 'Marzo',
	'R_APRIL'		=> 'Abril',
	'R_MAY'			=> 'Mayo',
	'R_JUNE'		=> 'Junio',
	'R_JULY'		=> 'Julio',
	'R_AUGUST'		=> 'Agosto',
	'R_SEPTEMBER'	=> 'Septiembre',
	'R_OCTOBER'		=> 'Octubre',
	'R_NOVEMBER'	=> 'Noviembre',
	'R_DECEMBER'	=> 'Diciembre',

	'R_MONDAY'		=> 'Lunes',
	'R_TUESDAY'		=> 'Martes',
	'R_WEDNESDAY'	=> 'Miércoles',
	'R_THURSDAY'	=> 'Jueves',
	'R_FRIDAY'		=> 'Viernes',
	'R_SATURDAY'	=> 'Sábado',
	'R_SUNDAY'		=> 'Domingo',
));
