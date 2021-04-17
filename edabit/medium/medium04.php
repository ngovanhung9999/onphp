<?php
//thuc thien 1 phep tinh
// echo "hung";
// function eq($exp)
// {
//     $result = @eval($exp . "; return true;");
//     return $result;
// }
// echo eq("6/(9-7)");
function eq($exp) {
	return eval("return $exp;");
}