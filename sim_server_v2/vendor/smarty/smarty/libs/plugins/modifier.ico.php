<?php
/**
 * smarty plugin
 * -------------------------------------------
 * File:     modifier.ico.php
 * Type:     modifier
 * Name:     ico
 * Pourpose: outputs an icon of font-awesome
 * -------------------------------------------
 */
function smarty_modifier_ico($icon){
	return "<i class=\"bi-{$icon}\"></i>";
}