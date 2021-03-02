<?php
require("mysqli_connect.php");
$book_id = $_POST['bookname'];
$name = $_POST['cust_name'];
$payment = $_POST['p_type'];
$order_quantity = $_POST['quantity'];
//echo $id;
// Insert data into orders table
$query = "insert into orders values (null,'$name', '$payment','$order_quantity','$book_id')";
$result = mysqli_query($dbc,$query);
//echo $result;

// update inventory table
$query = "select quantity from inventory where book_id = '$book_id'";
$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
    $quantity = $row['quantity'];
    //echo $quantity;
    $quantity = $quantity - $order_quantity;
}
$query = "update inventory set quantity = '$quantity' Where book_id = '$book_id'";
$result = mysqli_query($dbc, $query);
header("Location: thankyou.html");
?>