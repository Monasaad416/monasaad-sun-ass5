<form method="GET" action="">
<input type="text" placeholder="Enter product name" name="product-name"/>
<input type="submit" name="submit" value="submit"/>
</form>


<?php
$prodName = $_GET['product-name'];
print_r($prodName);
$conn = mysqli_connect("localhost","root","","route_34");
$query = "SELECT SUM(quantityOrdered) FROM `orderdetails` WHERE productCode = (SELECT productCode from `products` WHERE productName = '$prodName')";
$result = mysqli_query($conn,$query);
$totalNumOrdered = mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($totalNumOrdered);
?>


<p>
    <?php foreach($totalNumOrdered as $total){ ?>
        Total number of pieces ordered : $total
    <?php } ?>
</p>