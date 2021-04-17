<?php
//tim bod trong mang
function findBod($names){
	return array_search("Bob",$names)===false?-1:array_search("Bob",$names);
}

echo var_dump(findBod(["Bob", "Nathan", "Hayden"]));

function findBob1($names) {
	return in_array('Bob',$names) ? array_search('Bob', $names) : -1 ;
}