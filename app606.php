<?php
function address (&$str) : string {
    $str .= ' Call by referrence';
    return $str;
}
$str = 'This is';
echo address($str);