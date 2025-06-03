<html>

<head>
    <meta charset = 'utf8'>
</head>

<?php
    $no = $_GET["no"];

    $link = mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'info');  // 預設使用的資料庫名稱
        
    $sql = "SELECT * FROM school WHERE no = '$no'";
    mysqli_set_charset($link, 'utf8');

    if ($result = mysqli_query($link, $sql)){
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $address = $row["address"];
            $birthday = $row["birthday"];
        }
    }
?>

<form action = 'updateEx.php' method = 'POST'>
    <input type = "hidden" name = 'no' value = '<?php echo $no?>'>
    Please input your Name: <input type = "text" name = 'sName' value = '<?php echo $name?>'><BR>
    Please input your Address: <input type = "text" name = 'sAddress' value = '<?php echo $address?>'><BR>
    Please input your Birthday: <input type = "date" name = 'sBday' value = '<?php echo $birthday?>'><BR>
    <input type = "submit">
</form>