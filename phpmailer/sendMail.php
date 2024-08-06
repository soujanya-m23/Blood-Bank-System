<?php
define('DIR', '');
require_once DIR . '../config.php';
$contol = new Controller();
$admin = new Admin();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings Signed out




    $e = $_POST['email'];
    $n = $_POST['name'];
    $uid = $_SESSION['u_id'];
    $date = $_POST['date'];
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $b = $_POST['category'];
    $u_location = $_POST['location'];
    $u_time = $_POST['time'];
    $did=$_POST['did'];



    $a = 'accepted';
    $stmt = $admin->cud("INSERT INTO `appointment`(`user_id`,`donor_id`,`category_id`,`apt_date`,`apt_location`,`apt_time`) VALUES ('$uid','$did','$b','$date','$u_location','$u_time')", "save");




    // echo $e;
// echo $n;
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'sujusoujanya23@gmail.com';                     // SMTP username
    $mail->Password = 'ddlt nxtd uukx plcn';                               // SMTP password
    $mail->SMTPSecure = 'ssl';
    ;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('sujusoujanya23@gmail.com', 'BLOOD BANK');
    $mail->addAddress($u_email, $u_name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Hello,' . $u_name . '!';
    $mail->Body = 'We trust this message finds you in good health. 
    <br><br>
    We are pleased to inform you that 
    <br>
    <strong>Donor:</strong> ' . $n . ' 
    <br>
    <strong>Email:</strong> ' . $e . ' 
    <br>
    <strong>Location:</strong> ' . $u_location . ' 
    <br>
    <strong>Time:</strong> ' . $u_time . ' 
    <br>
    <strong>Blood Group:</strong> ' . $b . '
    <br><br>
    A compassionate individual, has scheduled a donation for you. The confirmed date for the donation is -' . $date . '.';



    $mail->AltBody = 'THANK YOU';



    $mail->send();



    // $admin->redirect1('../Controller/updateorder.php?id='.$i);
    // echo "<script>window.location='sendMail1.php'</script>";
    $admin->redirect1('sendMail1.php');
    //what you should do after sending mail

    exit();
} catch (Exception $e) {

    //error if somthing went wrong

    echo '<script>alert("Message could not be sent.")</script>';
}
?>