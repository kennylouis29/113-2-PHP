<?php
    session_start();
?>

<h1>Login Result </h1>

<?php
    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'info');

    $sql = "SELECT * FROM user WHERE username ='".$userName."'AND password = '".$userPwd."'";

    $result = mysqli_query($link, $sql);
    $records = mysqli_num_rows($result);
    echo $records;

    if ($records > 0){
        echo "Login success";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds", time());
        setcookie("userName", $defaultName, $cookiedate);
        header("Location:form.php");
    } else {
        echo "Login failed, will send you back to login again";
        header("Refresh:3;url='login.php");
    }

?>