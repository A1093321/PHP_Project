<?php
session_start();
$GETclass_name=$_GET["class_name"];
$_SESSION["class_name"] = $GETclass_name;
$sessionName = $_SESSION["class_name"];

echo "<script> if(confirm( '確定退選?'))  location.href='quit.php';else location.href='課表.php'; </script>"; 
?>