<?php
//Turn on error reporting- always add to top of every php script
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("includes/header.html");
?>

<div id ="main" class ="container">
    <h1>Order Summary</h1>

<?php
//connect to database
include('/home/acamposg/connect.php');
//echo"Connected Successfully!";

$sql = "SELECT order_id, fname, lname, address, size, toppings, 
        method, price, comment, order_date
        FROM pizza
        ORDER BY lname";
$result = @mysqli_query($cnxn, $sql);
//var_dump($result);

 echo "<table id='orders' class='display'>
    <thead>
        <tr>
            <th>OrderID</th>
            <th>Customer</th>
            <th>Method</th>
            <th>Size</th>
            <th>Toppings</th>
        </tr>
    </thead>
    <tbody>";



foreach ($result as $row)
{
    //var_dump($row);

    $order_id = $row['order_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $address = $row['address'];
    $size = $row['size'];
    $toppings = $row['toppings'];
    $method = $row['method'];
    //echo"<p>$order_id - $lname, $fname</p>";

    echo "<tr>
            <td>$order_id</td>
            <td>$lname, $fname</td>
            <td>$method</td>
            <td>$size</td>
            <td>$toppings</td>
          </tr>";
}

echo"</tbody></table>";

?>

</div>

<?php
include('includes/footer2.html');
?>
