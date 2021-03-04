<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_COOKIE['books'])) {
        $books = explode(",",$_COOKIE['books']);
        $books[] = $_POST['bookname'];
        $cookiestring = implode(",", $books);
        

    } else {
        $cookiestring = $_POST['bookname'];
    }
    setcookie('books',$cookiestring,time()+(60*60*60));
}
print_r($_COOKIE['books']);
?>