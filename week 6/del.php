<?php
    $no = $_GET["no"];

    $link = mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'info');  // 預設使用的資料庫名稱
    mysqli_set_charset($link, 'utf8');

    $sql = "DELETE FROM school WHERE no = '$no'";
    
    if (mysqli_query($link, $sql)){
        header("Location:dbtest.php");
    } else {

    }
?>