<?php 
session_start();
$sessionID=$_SESSION["ID"];
$CN=$_POST["className"];
$CD=$_POST['classDay'];
$ST=$_POST['startTime'];
$ET=$_POST['endTime'];
$CT=$_POST["teacherName"];
$CM=$_POST["amount"];
$CTYPE=$_POST["classType"];
$CC=$_POST["classSummary"];
$CV=$_POST["classVideo"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
$sql = "INSERT INTO class (class_name,class_day,startTime,endTime,class_teacher,class_max,class_type,class_content,class_video,teacher_id) VALUES ('$CN','$CD','$ST','$ET','$CT','$CM','$CTYPE','$CC','$CV','$sessionID')";
$result = (mysqli_query($link,$sql));
if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('新增課程成功');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=老師課程資料.php'>";
}
?>