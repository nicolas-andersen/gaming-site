
<?php
$connection = mysqli_connect("localhost", "sales", "@Chungus123");
if (!$connection) {
	die("Could not connect to mysql");
}

$uid = uniqid();

$items_size = 3;
for ($i = 0; $i < $items_size; $i++) {
	if (!isset($_COOKIE[strval($i)])) {
		continue;
	}

	if ($_COOKIE[strval($i)] < 1) {
		continue;
	}

	$cookie = $_COOKIE[strval($i)];

	$result = mysqli_query($connection, "SELECT * FROM sales_db.products where id IN(" . $i . ")");
	$array = mysqli_fetch_array($result);
	$price = $array[4];
	$stock = $array[3];

	mysqli_query($connection, "INSERT INTO sales_db.receipt (uid, product, amount, price) VALUES('" . $uid . "', " . $i . ", " . $cookie . ", " . $price . ")");
	mysqli_query($connection, "UPDATE sales_db.products SET stock=" . $stock - $cookie . " WHERE id=" . $i);

?>

