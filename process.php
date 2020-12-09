<!DOCTYPE php>

<html>
	<body>

		<?php
			$customer = $_GET["Cname"];
			$location = $_GET["location"];
			$ponumber = $_GET["poNumber"];
			$deldate = $_GET["delivery"];
			$deltime = $_GET["time"];


			echo "Customer Name: ".$customer."<br>";
			echo "Location: ".$location."<br>";
			echo "PO Number: ".$ponumber."<br>";
			echo "Delivery Date: ".$deldate."<br>";
			echo "Delivery Time: ".$deltime."<br>";

		?>

	</body>
</html>