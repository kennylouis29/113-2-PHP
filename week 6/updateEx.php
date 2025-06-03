<html>

<head>
    <meta charset = 'utf8'>
</head>

<?php
    $no = $_POST["no"];
    $sName = $_POST["sName"];
    $sAddress = $_POST["sAddress"];
    $sBday = $_POST["sBday"];

    $link = mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'info');  // 預設使用的資料庫名稱
    mysqli_set_charset($link, 'utf8');

    $sql = "UPDATE school SET name = '$sName', address = '$sAddress', birthday = '$sBday' WHERE no = '$no'";

    if (mysqli_query($link, $sql)){
        header("Location:dbtest.php");
    } else {

    }

?>