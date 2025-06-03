<?php
    session_start();
?>

<html>

<head>
</head>

<body>
    <?php
    if (isset ($_SESSION["check"])) {
        echo "Welcome Admin!<BR>";
        echo "<a href = 'logout.php'>Logout</a><BR><BR>";
        echo "<a href = 'user_interface.php'>Click here for monitoring user's interface</a><BR>";
    } else {
        echo "Illegal use";
        header("Refresh:2; url='login.php'");
    }
    ?>
</body>

</html>