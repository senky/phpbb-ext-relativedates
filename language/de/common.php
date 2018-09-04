<?php
/**
 *
 * Relative dates extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
    $lang = array();
}

$lang = array_merge($lang, array(
    'RELATIVE_DATES'            => 'Relative Zeit- und Datumsangaben',
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
    'R_AGO' => 'vor %s',
    'R_FROM_NOW' => 'noch %s',
    'R_AFTER' => 'nach %s',
    'R_BEFORE' => 'vor %s',
    'R_YEAR' => array(
        1 => '1 Jahr',
        2 => '%d Jahre',
    ),
    'R_MONTH' => array(
        1 => '1 Monat',
        2 => '%d Monate',
    ),
    'R_WEEK' => array(
        1 => '1 Woche',
        2 => '%d Wochen',
    ),
    'R_DAY' => array(
        1 => '1 Tag',
        2 => '%d Tage',
    ),
    'R_HOUR' => array(
        1 => '1 Stunde',
        2 => '%d Stunden',
    ),
    'R_MINUTE' => array(
        1 => '1 Minute',
        2 => '%d Minuten',
    ),
    'R_SECOND' => array(
        1 => '1 Sekunde',
        2 => '%d Sekunden',
    ),

    'R_JANUARY' => 'Januar',
    'R_FEBRUARY' => 'Februar',
    'R_MARCH' => 'März',
    'R_APRIL' => 'April',
    'R_MAY' => 'Mai',
    'R_JUNE' => 'Juni',
    'R_JULY' => 'Juli',
    'R_AUGUST' => 'August',
    'R_SEPTEMBER' => 'September',
    'R_OCTOBER' => 'Oktober',
    'R_NOVEMBER' => 'November',
    'R_DECEMBER' => 'Dezember',

    'R_MONDAY' => 'Montag',
    'R_TUESDAY' => 'Dienstag',
    'R_WEDNESDAY' => 'Mittwoch',
    'R_THURSDAY' => 'Donnerstag',
    'R_FRIDAY' => 'Freitag',
    'R_SATURDAY' => 'Samstag',
    'R_SUNDAY' => 'Sonntag',
));
