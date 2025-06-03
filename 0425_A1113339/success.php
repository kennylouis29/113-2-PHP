<html>
    <meta charset = 'utf8'>
</html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'php0425');  // 預設使用的資料庫名稱

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $photo = addslashes(file_get_contents($_FILES['userPhoto']['tmp_name']));

    $sql = "INSERT INTO registration (name, email, photo) VALUES ('$name', '$email', '$photo')";

    if (mysqli_query($link, $sql)) {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'kennylouis299@gmail.com';                     //SMTP username
            $mail->Password   = 'aryu jbbg kcda ccyt';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet = 'utf-8';

            $mail->setFrom('kennylouis299@gmail.com', 'Registration System');
            $mail->addAddress($email, $name);
            $mail->addEmbeddedImage($_FILES['userPhoto']['tmp_name'], 'userPhotoCID', $_FILES['userPhoto']['name']);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Registration Successful!';
            $mail->Body    = "<h3>Dear $name,</h3>
                            <p>Your registration is successful!</p>
                            <p><strong>Your uploaded photo:</strong><br><img src='cid:userPhotoCID'></p>
                            ";
            $mail->send();
            echo 'Registered succesfully and confirmation email sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } 
    } else {
        echo "Database insert error: " . mysqli_error($link);
    }
}   

?>