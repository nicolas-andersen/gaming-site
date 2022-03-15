<?php

$id = strval($_GET["id"]);
$amount = 0;

if (isset($_COOKIE[$id])) {
	$amount = intval($_COOKIE[$id]);
	$amount += 1;
} else {
	$amount = 1;
}

setcookie($_GET["id"], $amount, time() + mktime(0, 0, 0, 0, 30, 0), "/", "", true);

header("location: basket.php");
die();
?>