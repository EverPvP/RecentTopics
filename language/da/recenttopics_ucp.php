<?php
/**
 *
 * @package Recent Topics Extension
 * Danish translation by EverPvP
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
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
	'RT_ENABLE'              => 'Vis seneste indlæg',
	'RT_ALT_LOCATION'        => 'Brug alternativ lokation',
	'RT_ALT_LOCATION_EXP'    => 'Flyt seneste indlæg, til en anden placering (Som regel buden, men det afhænger af temaet).',
	'RT_SORT_START_TIME'     => 'Sorter seneste indlæg efter indlægets indsendelses tid.',
	'RT_SORT_START_TIME_EXP' => 'I stedet for at sortere dem efter seneste sendte indlæg.',
	'RT_UNREAD_ONLY'         => 'Vis kun ulæste indlæg i seneste indlæg',
));