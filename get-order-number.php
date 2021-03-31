<form method="GET" action="show-order-api.php">
    <input type="number" placeholder="Enter Order Number" name="orderNumber"/>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php
$orderNum = $_GET['orderNumber'];