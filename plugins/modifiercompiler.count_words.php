<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsModifierCompiler
 */
/**
 * Smarty count_words modifier plugin
 * Type:     modifier
 * Name:     count_words
 * Purpose:  count the number of words in a text
 *
 * @link   https://www.smarty.net/manual/en/language.modifier.count.words.php count_words (Smarty online manual)
 * @author Uwe Tews
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */
function smarty_modifiercompiler_count_words($params)
{
    // expression taken from http://de.php.net/manual/en/function.str-word-count.php#85592
    return 'preg_match_all(\'/\p{L}[\p{L}\p{Mn}\p{Pd}\\\'\x{2019}]*/' . \Smarty\Smarty::$_UTF8_MODIFIER . '\', ' .
           $params[ 0 ] . ', $tmp)';
}
