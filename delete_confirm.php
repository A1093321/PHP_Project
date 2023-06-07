<?php
session_start();
$GETclass_number=$_GET["class_number"];
$_SESSION["CI"] = $GETclass_number;
$sessionCI = $_SESSION["CI"];

$sql = "SELECT class_name FROM class WHERE class_number ='$GETclass_number'";
echo "<script> if(confirm( '確定刪除?'))  location.href='delete.php';else location.href='老師登入成功.php'; </script>"; 

?>