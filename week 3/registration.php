<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['Uname']) && isset($_GET['Name']) && isset($_GET['Email'])) {
    $Uname = htmlspecialchars($_GET['Uname']);
    $Name = htmlspecialchars($_GET['Name']);
    $Email = htmlspecialchars($_GET['Email']);

    header("Location: registrationsuccess.php?Uname=" . urlencode($Uname) . "&Name=" . urlencode($Name) . "&Email=" . urlencode($Email));
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Party Registration</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('welcome-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }
        .container {
            background: rgba(255, 255, 255, 0.88);
            width: 420px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            color: #ff6b81;
            font-size: 28px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            background-color: #ff6b81;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🎉 Welcome Party Registration 🎉</h2>
    <form method="get" action="registration.php">
        <label for="Uname">Username:</label>
        <input type="text" name="Uname" id="Uname" required>

        <label for="Name">Full Name:</label>
        <input type="text" name="Name" id="Name" required>

        <label for="Email">Email Address:</label>
        <input type="email" name="Email" id="Email" required>

        <input type="submit" value="Register Now">
    </form>
</div>

</body>
</html>
