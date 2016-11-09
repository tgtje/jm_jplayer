<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
*/

if (!defined('e107_INIT')) { exit; }


//v2.x Standard for extending menu configuration within Menu Manager. (replacement for v1.x config.php)
	
class jm_jplayer_menu
{
	function __construct()
	{
		e107::lan('jm_jplayer','admin',true,true); // English_menu.php or {LANGUAGE}_menu.php
	}

	/**
	 * Configuration Fields.
	 * @return array
	 */
	public function config($menu='')
	{

    $tmp =  e107::getDb()->retrieve('jm_jplayer_playlists','id,name',null, true);
    
    foreach($tmp as $val)
		{
			$id = $val['id'];
			$categories[$id] = $val['name'];
		}
		
		$fields = array();
		$fields['playlist_caption']  = array('title'=> LAN_CAPTION, 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'));
    $fields['playlist_id']       = array('title'=> LAN_JPLAYER_ADMIN_38, 'type'=>'dropdown', 'writeParms'=>array('optArray'=>$categories ));
    return $fields;

	}

}
 


?>