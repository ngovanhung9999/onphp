<?php
//get ngay thang nam theo format
echo "today is ".date("Y/m/d")."<br />";
echo "today is ".date("Y-m-d")."<br />";
echo "today is ".date("Y.m.d")."<br />";
//hien thay thu trong tuan
echo "today is ". date("l")."<hr />";
//lay gio phut giay
echo "the time is ". date("h:i:sa")."<br />";
echo "the time is ". date("H:i:s")."<hr />";
//set mui gio goi
date_default_timezone_set("America/New_York");
echo "the time is ". date("H:i:s")."<hr />";
//set date voi tham so rieng ngay thang nam
$d=mktime(11, 14, 54, 8, 12, 2014);
echo $d;
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<hr />";
//set date voi string
$time=strtotime("10:30pm April 15 2015");
echo "Created date is " . date("Y-m-d h:i:sa", $time)."<hr />";
