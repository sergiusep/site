<?php

$numele = $_POST["nume"];
$emailul = $_POST["email"];
$msj = $_POST["mesaj"];
$headers = "From: " . strip_tags($_POST["email"]) . "\r\n";
$headers .= "Reply-To: " . strip_tags($_POST["email"]) . "\r\n";
$mailSergiu = "Pop.Sergiu.Sebastian@gmail.com";

// require "vendor/autoload.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// $mail = new PHPMailer(true);

// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->Host = "smtp.example.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

// $mail->Username = "you@example.com";
// $mail->Password = "password";

// $mail->setFrom($mailSergiu, $numele);
// $mail->addAddress("Pop.Sergiu.Sebastian@gmail.com");

// $mail->Subject = $numele;

// $mail->Body = $msj;

// try {
//     $mail->send();
//     echo "Email sent successfully.";
// } catch (Exception $e) {
//     echo "Failed to send email. Error: " . $mail->ErrorInfo;
// }


if(mail($mailSergiu, $numele, $msj, $headers)) {
    echo("Email trimis cu succes spre $mailSergiu...");
} else {
    echo("Nu s-a trimis emailul...");
}

?>