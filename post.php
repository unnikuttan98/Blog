<?php
session_start();
if(isset($_POST['add'])){


if(empty($_POST['title'])||empty($_POST['post']))
{header("Location:blog.html");}

else{
$post=$_POST['post']."<hr>created by ".$_POST['user']."<hr>";
$title="<h1>".$_POST['title']."</h1>";
$file=fopen("post.html","a");
fwrite($file,$title);
fwrite($file,$post);
fclose($file);
header("Location:blog.html");
}
}
?>