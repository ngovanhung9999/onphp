<?php
//tim phan tu lon tu 2 cua mang
function secondLargest($arr)
{
    $max1 = $arr[0];
    $max2 = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max1 < $arr[$i]) {
            $max1 = $arr[$i];
        }
    }

    for ($i = 0; $i < count($arr); $i++) {
        if ($max2 < $arr[$i] && $arr[$i] < $max1) {
            $max2 = $arr[$i];
        }
    }
    return $max2;
}

//secondLargest([10, 40, 30, 60, 50]);
echo '<pre>';
print_r(secondLargest([10, 40, 30, 60, 50]));
echo '</pre>';
