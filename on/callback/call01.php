<?php
//xem 1 so co phai la binh phuong cua 1 so nao do khong


function add($a,$b,$callback){
    $callback($a+$b);
}

function multiply($res,$c,$callback){
    $callback($res*$c);
}

function tinh($a,$b,$c){
    add($a,$b,function($res) use ($c){
        multiply($res,$c,function($res){
            echo $res;
        });
    });
}
tinh(1,2,3);