<?php
session_start();
$sessionID=$_SESSION["ID"];
//$GETclass_number=$_GET["class_number"];
$sessionCI = $_SESSION["CI"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱
$sql = "DELETE FROM class WHERE teacher_id = '$sessionID' AND class_number='$sessionCI'";
$result = mysqli_query($link,$sql);
//if(mysqli_num_rows($result)==1){
if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
    echo "alert ('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=老師課程資料.php'>";
}