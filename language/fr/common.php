<?php
/**
 *
 * Relative dates. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 Jakub Senko <jakubsenko@gmail.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'RELATIVE_DATES'			=> 'Afficher les dates relatives',
	'RELATIVE_DATES_MAX'		=> 'Limite de temps des dates relatives',
	'RELATIVE_DATES_MAX_DESC'	=> 'Chaque date plus ancienne que celle spécifiée ici sera automatiquement affichée au format absolu. Définir sur 0 pour désactiver ce comportement.',
	'R_DAYS'					=> 'jour(s)',
	'R_MONTHS'					=> 'mois',
	'R_YEARS'					=> 'année(s)',

	'R_EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Dernière modification par %2$s %3$s, modifié au total %1$d fois.',
		2	=> 'Dernière modification par %2$s %3$s, modifié au total %1$d fois.',
	),
	'R_BUMPED_MESSAGE'	=> 'Dernière remontée par %1$s %2$s.',

	'R_NOW'			=> 'à l’instant',
	'R_AGO'			=> 'il y a %s',
	'R_FROM_NOW'	=> '%s à compter de maintenant',
	'R_AFTER'		=> '%s après',
	'R_BEFORE'		=> '%s avant',
	'R_YEAR'		=> array(
		1	=> '1 an',
		2	=> '%d ans',
	),
	'R_MONTH'		=> array(
		1	=> '1 mois',
		2	=> '%d mois',
	),
	'R_WEEK'		=> array(
		1	=> '1 semaine',
		2	=> '%d semaines',
	),
	'R_DAY'			=> array(
		1	=> '1 jour',
		2	=> '%d jours',
	),
	'R_HOUR'		=> array(
		1	=> '1 heure',
		2	=> '%d heures',
	),
	'R_MINUTE'		=> array(
		1	=> '1 minute',
		2	=> '%d minutes',
	),
	'R_SECOND'		=> array(
		1	=> '1 seconde',
		2	=> '%d secondes',
	),

	'R_JANUARY'		=> 'janvier',
	'R_FEBRUARY'	=> 'février',
	'R_MARCH'		=> 'mars',
	'R_APRIL'		=> 'avril',
	'R_MAY'			=> 'mai',
	'R_JUNE'		=> 'juin',
	'R_JULY'		=> 'juillet',
	'R_AUGUST'		=> 'aout',
	'R_SEPTEMBER'	=> 'septembre',
	'R_OCTOBER'		=> 'octobre',
	'R_NOVEMBER'	=> 'novembre',
	'R_DECEMBER'	=> 'décembre',

	'R_MONDAY'		=> 'lundi',
	'R_TUESDAY'		=> 'mardi',
	'R_WEDNESDAY'	=> 'mercredi',
	'R_THURSDAY'	=> 'jeudi',
	'R_FRIDAY'		=> 'vendredi',
	'R_SATURDAY'	=> 'samedi',
	'R_SUNDAY'		=> 'dimanche',
));
