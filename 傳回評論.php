<?php 
session_start();
$sessionID=$_SESSION["ID"];
//$GETclass_number=$_GET["class_number"];
//$_SESSION["CI"] = $GETclass_number;
$sessionCI = $_SESSION["CI"];

$comment = $_POST['comments'];
$rating = $_POST['rating'];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱

$sql = "UPDATE enroll SET rating = '$rating',comments = '$comment' WHERE user = '$sessionID' AND selected_course = '$sessionCI'";
$result =mysqli_query($link,$sql);

if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
    echo "alert ('評分/評論成功');"; 
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=學生登入成功.php'>";
}

else if(mysqli_affected_rows($link)==0){
    echo "<script type='text/javascript'>";
    echo "alert ('身分是老師/並未選擇此課程');";
    echo "</script>";
    echo "<a href= '課程內容.php?class_number=".$sessionCI."'>回課程內容</a>";
}
?>