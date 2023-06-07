<?php
session_start();
$sessionID=$_SESSION["ID"];
$GETclass_number=$_GET["class_number"];
$_SESSION["CI"] = $GETclass_number;
$sessionCI = $_SESSION["CI"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱

$sql = "SELECT class_name FROM class WHERE class_number = '$GETclass_number'";
$result=mysqli_fetch_array(mysqli_query($link,$sql));

$sql1 = "SELECT class_teacher FROM class WHERE class_number = '$GETclass_number'";
$result1=mysqli_fetch_array(mysqli_query($link,$sql1));

$sql2 = "SELECT class_content FROM class WHERE class_number = '$GETclass_number'";
$result2=mysqli_fetch_array(mysqli_query($link,$sql2));

$sql3 = "SELECT class_video FROM class WHERE class_number = '$GETclass_number'";
$result3=mysqli_fetch_array(mysqli_query($link,$sql3));

$sql4 = "SELECT AVG(rating) FROM enroll WHERE selected_course = '$GETclass_number' AND rating > '0' GROUP BY selected_course";
$result4=mysqli_fetch_array(mysqli_query($link,$sql4));
?>

<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>課程內容</FONT></b></h1>
<div style="border-width: 3px ; width: 1200px; height: 500px ; padding: 5px; text-align: center; background-color: rgb(232, 255, 232, 0.7);border-radius: 4px;">

</br></br>
<font size="5">課程名稱: <?php echo $result[0];?></font></br></br>
<font size="5">指導老師: <?php echo $result1[0];?></font></br></br>
<font size="5">課程大綱: <?php echo $result2[0];?></font></br></br>
<font size="5">課程影片: <?php echo "<a href=$result3[0]>$result3[0]</a>";?></font></br></br>
<font size="5"><?php echo "<a href='課程評論.php?class_number=".$GETclass_number."'>課程評論(僅限學生)</a>";?></font>
</br></br>
<font size="5">課程平均評分: 
<?php 
if (mysqli_num_rows(mysqli_query($link,$sql4))>0){
    echo $result4[0];
    echo ' / 5';
}else{
    echo '尚未有人評分';
}
?>
</font></br></br>

</div>

<a href='課程查詢.php'><font size='5'></br>課程查詢(學生)</font></a>
<br><br>
<a href='老師登入成功.php'><font size='5'>回老師首頁</font></a>
</CENTER>
</body>
</html>