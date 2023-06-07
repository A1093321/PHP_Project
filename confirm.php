<?php 
session_start();
$sessionID=$_SESSION["ID"];
$GETclass_number=$_GET["class_number"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
$sql = "SELECT * FROM class WHERE class_number = '$GETclass_number' AND class_max = (SELECT COUNT(user) FROM enroll WHERE selected_course = '$GETclass_number' GROUP BY selected_course)";
$result = mysqli_query($link,$sql);

$checkTime = 
"SELECT * 
FROM class C, enroll E
WHERE E.user = '$sessionID' AND E.selected_course = C.class_number AND C.class_day = (SELECT C1.class_day FROM class C1 WHERE C1.class_number = '$GETclass_number') AND 
(C.startTime <= (SELECT endTime FROM class C2 WHERE C2.class_number = '$GETclass_number') AND
C.endTime >= (SELECT startTime FROM class C3 WHERE C3.class_number = '$GETclass_number'))
";
$time_result =mysqli_query($link,$checkTime);

if(mysqli_num_rows($result)==1){
    $history = "INSERT INTO history VALUES('$sessionID','$GETclass_number','失敗')";
    $Hresult = mysqli_query($link,$history);
    echo "<script type='text/javascript'>";
    echo "alert ('此課程人數已滿');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=選課失敗.php'>";
}else if(mysqli_num_rows($time_result)){
    $history = "INSERT INTO history VALUES('$sessionID','$GETclass_number','失敗')";
    $Hresult = mysqli_query($link,$history);
    echo "<script type='text/javascript'>";
    echo "alert ('已選擇同時間之課程');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=選課失敗.php'>";
}else{
    $SUC ="INSERT INTO enroll VALUES('$sessionID','$GETclass_number','','0')";
    $SUC_result =mysqli_query($link,$SUC);
    $history = "INSERT INTO history VALUES('$sessionID','$GETclass_number','成功')";
    $Hresult = mysqli_query($link,$history);
    if($SUC_result){
        echo "<script type='text/javascript'>";
        echo "alert ('選課成功');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=課程查詢.php'>";
    }
}
?>