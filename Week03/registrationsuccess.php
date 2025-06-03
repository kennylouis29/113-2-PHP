<?php
$Uname = isset($_GET['Uname']) ? htmlspecialchars($_GET['Uname']) : 'Unknown';
$Name = isset($_GET['Name']) ? htmlspecialchars($_GET['Name']) : 'Guest';
$Email = isset($_GET['Email']) ? htmlspecialchars($_GET['Email']) : 'Not Provided';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to the Party!</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('welcome-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            width: 500px;
            margin: 120px auto;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        h2 {
            font-size: 30px;
            color: #ff6b81;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🎊 You're Registered! 🎊</h2>
    <p><strong>Username:</strong> <span class="highlight"><?php echo $Uname; ?></span></p>
    <p><strong>Full Name:</strong> <span class="highlight"><?php echo $Name; ?></span></p>
    <p><strong>Email:</strong> <span class="highlight"><?php echo $Email; ?></span></p>
    <p>Thank you for signing up — we can't wait to see you at the party! 🎈</p>
</div>

</body>
</html>
