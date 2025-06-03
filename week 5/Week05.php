<html>
    
<head>
    <meta charset = "utf8">
</head>

<h1><center>List of Student Data</center></h1>

<?php
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpWeek06');  // 預設使用的資料庫名稱

    //     if ( !mysqli_select_db($link, 'school') )
    //     die("無法開啟資料庫!<br/>");
    // else
    //     echo "資料庫: 開啟成功!<br/>";
$sql = "SELECT * FROM studentdata";

mysqli_set_charset ($link, 'utf8');
if ($result = mysqli_query ($link, $sql)) {
    echo "<table border = '1'>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["no"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["student_id"]."</td>"."<td>".$row["birthday"]."</td>"."<td>".$row["grade"]."</td>"."<BR>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</html>