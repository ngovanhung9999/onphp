<?php
function add_suffix($suffix)
{
    return function ($str) use ($suffix) {
        return $str . $suffix;
    };
}
$add_ly = add_suffix("ly");
echo $add_ly("hopeless");
