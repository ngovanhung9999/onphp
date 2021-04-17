<?php
// sap xep mang theo chieu dai cua chuoi
function mySort($a,$b){
    return strlen($a)<strlen($b) ?-1:1;
    //strlen($a)-strlen($b)
}
function sortByLength($arr)
{
    usort($arr,"mySort");
    return $arr;
}
sortByLength(["Leonardo", "Michelangelo", "Raphael", "Donatello"]);
// echo '<pre>';
// print_r(sortByLength(["Leonardo", "Michelangelo", "Raphael", "Donatello"]));
// echo '</pre>';
