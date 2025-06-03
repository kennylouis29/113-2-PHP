<?php
    session_start();
?>

<html>

<head>
</head>

<body>
    <?php
    if (isset ($_SESSION["check"])) {
        echo "Welcome User!<BR><BR>";
        echo "Please input your commentary about this website:"; 
        echo "<form>";
            echo "<textarea col = '10' rows = '10' name = 'uComment'>";
            echo "</textarea>";
        echo "</form>";
        echo "<a href = 'logout.php'>Submit and Exit the Website</a>";
    } else {
        echo "Illegal use";
        header("Refresh:2; url='login.php'");
    }
    ?>
</body>

</html>