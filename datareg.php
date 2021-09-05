<?php
require_once("dbcon.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];

if(empty($name)||empty($email)||empty($phone)||empty($pass))
{
    header("Location:register.html");
}
elseif(isset($_POST['submit']))
{
  $register=$link->query("INSERT INTO register VALUES('$name','$email','$phone','$pass');");
  if($register==false){
      die("database connection failed");
  }
  else{
     header("Location:blog.html");
  }
}


if(isset($_POST['delete'])){
    $delete=$link->query("DELETE FROM register WHERE name='$name' ORDER BY phone DESC LIMIT 1 ");
    if($delete==false){
        die("query error");
    }
    else{
        header("Location:blog.html");
     }
    }
?>