<?php
require_once "./Engineer.php";
require_once "./Personnel.php";
require_once "./Worker.php";


$worker = new Worker("ngo hung", 26, "nam", "quang nam", 2, 4000000);

var_dump($worker);