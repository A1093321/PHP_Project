<?php 
session_start();
$GETclass_number=$_GET["class_number"];
$sessionID=$_SESSION["ID"];
$_SESSION["CI"] = $GETclass_number;
$sessionCI = $_SESSION["CI"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
?>
<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>我要評論</FONT></b></h1>
<form action="傳回評論.php" method="post" style=": 80%" enctype="multipart/form-data">

    <br/>
    <div style="border-width: 3px ; width: 500px; height: 250px ; padding: 5px; text-align: center; background-color: rgb(41, 105, 176, 0.7);border-radius: 4px;">
    <br/><br/>
    <font size="4">評分(0.5 ~ 5): </font><select name='rating' style = "width: 50px; height: 30px"><option>0.5</option><option>1</option><option>1.5</option><option>2</option><option>2.5</option><option>3</option><option>3.5</option><option>4</option><option>4.5</option><option>5</option></select><br>
    <br/><br/>
    <font size="4">評論(限30字以內): </font><input type ='text' name = 'comments' style = "width: 300px; height: 30px">
    <br/><br/><br/><br/>
    <input type='submit' value = '確認送出' style = "border:2px #7AFEC6 dashed; font-size: 20px; width: 125px; height: 40px; background-color: #6FB7B7">
    </div>
    
</form>
<?php
$show = "SELECT rating,comments FROM enroll WHERE selected_course = '$sessionCI' AND rating > '0'";
$show_result = mysqli_query($link,$show);
echo "<table border='1'>";
echo "<tr>";
echo "<td>評分</td> ";
echo "<td width = 200>評論</td> ";
echo "</tr>";
while($row=mysqli_fetch_assoc($show_result)){
    echo "<tr>";
    echo "<td>".$row["rating"]."</td><td>".$row["comments"]."</td>";
    echo "</tr>";
}
echo "</table>";



?>

</CENTER>


</body>
</html>