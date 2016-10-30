<?php
/*
* e107 website system
*
* Copyright (C) 2008-2014 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
*
*
*/

if (!defined('e107_INIT'))
{
	exit;
}

if (e107::isInstalled('jm_jplayer'))
{
	if (USER_AREA && e107::getMenu()->isLoaded('jm_jplayer'))
	{
		$jm_jplayer = e107::getSingleton('jm_jplayer', e_PLUGIN . 'jm_jplayer/jm_jplayer.class.php');
	}
}

?>