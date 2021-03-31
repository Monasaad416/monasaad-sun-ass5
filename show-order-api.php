
<?php
$orderNum = $_GET['orderNumber'];
print_r($orderNum);
echo "<br>";
$conn = mysqli_connect("localhost","root","","route_34");
$query = "SELECT * FROM `orders` WHERE orderNumber = 10100 ";
$result = mysqli_query($conn,$query);
$orderDetails = mysqli_fetch_assoc($result);

$myJson = json_encode($orderDetails);
print_r($myJson);