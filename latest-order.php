

<form method="GET" action="">
<input type="number" placeholder="input number" name="your-num"/>
<input type="submit" name="submit" value="submit"/>
</form>


<?php 
//get number of order
$numOfOrders = $_GET["your-num"];
//open connection with database 
$conn = mysqli_connect("localhost","root","","route_34");

//sql query
$query = "SELECT * FROM `orders` ORDER BY orderDate DESC LIMIT $numOfOrders";

//send query ro database 
$result = mysqli_query($conn,$query);
$latestOrders = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($latestOrders);

?>

<table >
  <tr>
    <th>Order Number</th>
    <th>Order Date</th>
    <th>Required Date</th>
    <th>Shipped Date</th>
    <th>Status</th>
    <th>Comment</th>
    <th>Customer Number</th>

  </tr>
  <?php foreach ($latestOrders as $order => $row){ ?>
  <tr>
  <?php foreach ($row as $key => $value){ ?>
    <td><?= $value ?></td>

    <?php } ?>
  </tr>

  <?php } ?>

</table>