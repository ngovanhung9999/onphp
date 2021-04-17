
<?php
//xem 1 so co phai la binh phuong cua 1 so nao do khong
function isSastry($n) {
    $s = sqrt($n.($n+1));
    return intval($s)==$s;
}
echo var_dump(isSastry(184));
