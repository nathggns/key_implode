<?php
/**
 * This file is part of the key_implode library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) 2013 Nathaniel Higgins <http://nath.is>
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * Implode an array by both key and value
 * @param  string $pair_glue The glue used for pairs of key/values
 * @param  string $glue      The glue used to join pairs of key/values
 * @param  array $arr        The associative array
 * @return string            Imploded associative array
 */
function key_implode($pair_glue, $glue, $arr) {
    $key_arr = array_map(function($val) use($pair_glue) {
        return implode($pair_glue, $val);
    }, array_map(null, array_keys($arr), array_values($arr)));

    return implode($glue, $key_arr);
}