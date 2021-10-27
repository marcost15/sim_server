<?php
/**
 * Inyecta una orden gettext
 * Type:     compiler function
 * Name:     gt
 * Purpose:  Inyecta una orden gettext para la traducción del programa
 *
 * @author Arnoldo Bric (arnoldobr@gmail.com)
 *
 * @param array $params parameters
 *
 * @return string with compiled code a inyectar
 *
 * @sample: {gt proof} produce <?=_('proof')?>
 */
function smarty_compiler_gt($params){
    return '<?=_(' . $params[ 0 ] . ')?>';
}
