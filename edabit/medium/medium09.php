<?php
function unstretch($w)
{
    return preg_replace('/((.)\2*)/', '$2', $w);
}

function unstretch1($word)
{
    $array = str_split($word);
    $result = [];
    foreach ($array as $key => $item) {

        if (!isset($array[$key + 1])) {
            $result[] = $item;
            break;
        }

        if ($array[$key + 1] !== $item)
            $result[] = $item;
    }
    return implode("", $result);
}
