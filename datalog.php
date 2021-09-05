<?php
session_start();
require_once("dbcon.php");
$l_name=$_POST['l_name'];
$l_pass=$_POST['l_pass'];

if(empty($l_name)||empty($l_pass)){
 header("Location:login.html");
}
elseif(isset($_POST['login'])){
    $log=$link->query("SELECT * FROM register");
   while ($row=$log->fetch_object()) {
       if($row->password=$l_pass){
           header("Location:blog.html");
       }
   }
}
?> 