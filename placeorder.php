

<?php
error_reporting(0);
require("mysqli_connect.php");
$book_id = $_POST['bookname'];
$name = $_POST['cust_name'];
$payment = $_POST['p_type'];
$order_quantity = $_POST['quantity'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$flag = true;
if(empty($name)){
  echo "<p style='color:red'>Please enter full name.</p><br>";
}
if(empty($phone)){
    echo "<p style='color:red'>Please enter phone number.</p><br>";
}
if(empty($address)){
    echo "<p style='color:red'>Please enter address.</p><br>";

}
if(empty($payment)){
    echo "<p style='color:red'>Please enter payment method.</p><br>";
}
if(empty($order_quantity)){
    echo "<p style='color:red'>Please enter quantity.</p><br>";

}

if($flag==true){

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
}
?>