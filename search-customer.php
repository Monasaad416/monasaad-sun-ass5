<form method="GET" action="">
    <input type="text" placeholder="Search for customer name" name="customer-name"/>
    <input type="submit" name="submit" value="submit"/>
</form>


<?php 
$customerName = $_GET['customer-name'];
$conn = mysqli_connect("localhost","root","","route_34");
$query = "SELECT * FROM `customers` WHERE customerName LIKE '%$customerName%' ";
$result = mysqli_query($conn,$query);
$customersList = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<div>
    <?php foreach ($customersList as $customer ){ ?>
    <p>
        <?= $customer['customerName'] ?>
    </p>
     <?php } ?>

</div>




