<?php

/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsModifierCompiler
 */

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
 * @return string with instrucción de llamada a gettext: _('$params[0]').
 *
 * @sample: {gt proof} produce <?=_('proof')?>
 */
function smarty_compiler_gt($params)
{
    return '<?=_(' . $params[0] . ')?>';
}
