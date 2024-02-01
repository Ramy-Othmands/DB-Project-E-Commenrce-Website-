<?php
  // create short variable names
  $flowerqty = $_POST['flowerqty'];
  $chocolateqty = $_POST['chocolateqty'];
  $fbouquetqty = $_POST['fbouquetqty'];
  $find = $_POST['find'];
?>
<html>
<head>
  <title>Ramy's Store - Order Results</title>
</head>
<body>
<h1>Ramy's Flower Store </h1>
<h2>Order Results</h2>
<?php

	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your order is as follows: </p>";

	$totalqty = 0;
	$totalqty = $flowerqty + $chocolateqty + $fbouquetqty;
	echo "Items ordered: ".$totalqty."<br />";


	if ($totalqty == 0) {

	  echo "You did not order anything on the previous page!<br />";

	} else {

	  if ($flowerqty > 0) {
		echo $flowerqty." flowers<br />";
	  }

	  if ($chocolateqty > 0) {
		echo $chocolateqty." Chocolate<br />";
	  }

	  if ($fbouquetqty > 0) {
		echo $fbouquetqty." Flower Bouquet<br />";
	  }
	}


	$totalamount = 0.00;

	define('FLOWERPRICE', 5);
	define('CHOCOLATEPRICE', 2);
	define('FBOUQUETPRICE', 10);

	$totalamount = $flowerqty * FLOWERPRICE
				 + $chocolateqty * CHOCOLATEPRICE
				 + $fbouquetqty * FBOUQUETPRICE;

	echo "Subtotal: $".number_format($totalamount,2)."<br />";

	$taxrate = 0.10;  // local sales tax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	echo "Total including tax: $".number_format($totalamount,2)."<br />";

	if($find == "a") {
	  echo "<p>Regular customer.</p>";
	} elseif($find == "b") {
	  echo "<p>Customer referred by TV advert.</p>";
	} elseif($find == "c") {
	  echo "<p>Customer referred by phone directory.</p>";
	} elseif($find == "d") {
	  echo "<p>Customer referred by word of mouth.</p>";
	} else {
	  echo "<p>We do not know how this customer found us.</p>";
	}

?>
</body>
</html>
