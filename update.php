<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>新增課程</FONT></b></h1>
<form action="update_confirm.php" method="post" style=": 80%" enctype="multipart/form-data">

<div style="border-width: 3px ; width: 550px; height: 650px ; padding: 5px; text-align: center; background-color: rgb(41, 105, 176, 0.7);border-radius: 4px;">
    
    <font size="4"><br><br>
    課程名稱: <input type = "text" name = "className" style = "width: 200px; height: 30px"><br><br><br>
    課程星期: 星期<select name = "classDay" style = "width: 50px; height: 30px"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br><br>
    課程開始節次: 第<select name = "startTime" style = "width: 50px; height: 30px"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option></select>節<br><br>
    課程結束節次: 第<select name = "endTime" style = "width: 50px; height: 30px"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option></select>節<br><br><br>
    老師名字: <input type = "text" name = "teacherName" style = "width: 150px; height: 30px"><br><br>
    限修人數: <input type = "int" name = "amount" style = "width: 100px; height: 30px"><br><br>
    必/選修: <select name = "classType" style = "width: 50px; height: 30px"><option>必修</option><option>選修</option></select><br><br>
    課程大綱: <input type ='text' name = "classSummary" style = "width: 300px; height: 30px"><br><br><br>
    影片: <input type = "text" name = "classVideo" style = "width: 500px; height: 30px"><br><br><br>
    </font>

    <input type = "submit" value = '確認送出' style = "border:2px #7AFEC6 dashed; font-size: 20px; width: 125px; height: 40px; background-color: #6FB7B7">
</div>

</form>
</CENTER>


</body>