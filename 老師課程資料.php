<?php
session_start();
$sessionID=$_SESSION["ID"];
//$GETclass_number=$_GET["class_number"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱
?>
<html>
<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>老師課程資料</FONT></b></h1>

<h2><a href='update.php'>新增課程</a><h2>
</br>
<?php
    $sql = "SELECT * FROM class WHERE teacher_id = '$sessionID'";
    $result = mysqli_query($link,$sql);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td width = 170>課程名稱</td> ";
    echo "<td>老師名字</td> ";
    echo "<td>星期</td> ";
    echo "<td>開始節次</td> ";
    echo "<td>結束節次</td> ";
    echo "<td>課程人數</td> ";
    echo "<td>選課確認</td>";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td><a href= '課程內容.php?class_number=".$row["class_number"]."'>".$row["class_name"]."</a></td><td>".$row["class_teacher"]."</td><td>".$row["class_day"]."</td><td>".$row["startTime"]."</td><td>".$row["endTime"]."</td><td>".$row["class_max"]."</td><td><a href = 'delete_confirm.php?class_number=".$row["class_number"]."'>刪除</a></td>";
	echo "</tr>";
    }
    echo "</table>";

?>

</body>
<br><a href='老師登入成功.php'><font size='5'>回首頁</font></a>
</CENTER>
</html>

