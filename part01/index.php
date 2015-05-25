<?php
$path = "../";
require_once($path."class.page.php");
$page = new page($path, "Part 01");

$page->readFile("data");
?>
