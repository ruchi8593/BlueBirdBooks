<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_COOKIE['books'])) {
//$books .= "," . $_COOKIE['books']; //explode(",",$_COOKIE['books']);
$books = explode(",",$_COOKIE['books']);
$books[] = $_POST['bookname'];
$cookiestring = implode(",", $books); 
       
       
    } else {
        $cookiestring = $_POST['bookname'];
       // "setting cookie first time"; 
    }
    setcookie('books',$cookiestring,time()+(60*60*60));
}

if(isset($_COOKIE['books'])) {
   print_r($_COOKIE['books']);
}
header("Location: checkout.php");
?>

