<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting('e_all');

$id = strval($_GET["id"]);
$amount = 0;

if (isset($_COOKIE[$id])) {
	$amount = intval($_COOKIE[$id]);
	$amount += 1;
} else {
	$amount = 1;
}

setcookie($id, strval($amount), time() + 3600, "/", "", false);

header("location: basket.php");
die();
?>
