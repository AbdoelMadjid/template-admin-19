<?php

function debug($msg, $options = null, $return = false) {
    return \Common\Util::debug($msg, $options, $return);
}

function plog($msg, $return = false) {
    return \Common\Util::debug($msg, array('dismiss' => false), $return);
}

function clog($msg, $newline = true, $return = false) {
    return \Common\Util::debug($msg, array('newline' => $newline, 'dismiss' => false), $return);
}

function get($field, $data = null, $default = null) {
    return \Common\Util::get($field, $data, $default);
}

function br2nl($text) {
    return \Common\Util::br2nl($text);
}

function array_delete($array, $items) {
    return array_diff($array, is_array($items) ? $items : array($items));
}

?>