<?php
// xem 1 mang co phai la 1 mang dat biet khong index le value phai le va nguoc lai
function isSpecialArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 == 0) {
            if ($arr[$i] % 2 != 0) {
                return false;
            }
        } else {
            if ($arr[$i] % 2 == 0) {
                return false;
            }
        }
    }
    return true;
}

var_dump(isSpecialArray([2, 7, 4, 9, 6, 1, 6, 3]));
//cach 2
function isSpecialArray1($arr) {
	foreach($arr as $k => $v){
		if($k%2 != $v%2)
			return false;
	}
	return true;
}
//cach 3
function isSpecialArray2($arr) {
	$evens = array_filter($arr, function($num){
		return $num % 2 === 0;
	});
	$odds = array_filter($arr, function($num){
		return $num % 2 !== 0;
	});
	return count($evens) === count($odds);
}