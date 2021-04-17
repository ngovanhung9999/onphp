<?php
function transformUpvotes($str)
{
    return array_map(function ($v) {
        return $v[strlen($v)-1]=="k" ? (int) (floatval($v) * 1000) : intval($v);
    }, explode(" ", $str));
}
var_dump(transformUpvotes("20.3k 3.8k 7.7k 992"));
