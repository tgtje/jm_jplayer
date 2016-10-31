<?php 
if (!defined('e107_INIT')) { exit; }


$text = "<table class='help-table' style='width:100%'>
<tr><td colspan='2'>No flash fallback provided </td></tr>
<tr><td>&nbsp;<b>&middot;</b></td><td>You can use MP3 ,  M4a , OGG , WAV.</td></tr>
<tr><td>&nbsp;<b>&middot;</b></td><td>External URLs may be used.</br> <i>WARNING: use ext at own risc!</i></td></tr>
<tr><td>&nbsp;<b>&middot;</b></td><td>Working mode is dependent on browser !!!</td></tr>
<tr><td>&nbsp;<b>&middot;</b></td><td>Systemfiles in use ? </br> !! Allow extensions in filetypes.xml !!!</td>";

$text .= "</table>";



$ns->tablerender("Additional Info",$text);


?>
