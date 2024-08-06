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

    // $ii = $_GET['idd'];
    $did = $_SESSION['d_id'];
    $stmt = $admin->ret("SELECT * FROM `donor` INNER JOIN `blood_requests` ON donor.donor_id=blood_requests.donor_id INNER JOIN `category` ON blood_requests.category_id=category.category_id INNER JOIN `appointment` ON appointment.donor_id=donor.donor_id");
    $crow = $stmt->fetch(PDO::FETCH_ASSOC);


    $e = $crow['donor_email'];
    $n = $crow['donor_name'];
    $date = $crow['apt_date'];


    $b = 'rejected';
    // $stmt = $admin->cud("UPDATE `order` SET `ostatus`='$b' WHERE orid='$ii'", "updated");




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
    $mail->addAddress($e, $n);

    // Content

    $mail->isHTML(true);
    $mail->Subject = 'Hello,' . $n . '!';
    $mail->Body = 'Dear ' . $n . '<br><br>' .
        'I hope this message finds you well. I wanted to take a moment to express my deepest gratitude for your incredibly generous donation. Your support means the world to us and will make a significant impact on BLOOD BANK.<br><br>' .
        'Thanks to your kindness, we are one step closer to achieving our goals and making a positive difference in the lives of those we serve.<br><br>' .
        'Once again, thank you for your generosity. Your contribution makes a meaningful difference, and we are grateful for your continued support.<br><br>' .
        'Warm regards, A compassionate individual, has scheduled a donation for you. The confirmed date for the donation is -' . $date . '.';
    $mail->AltBody = 'THANK YOU';



    $mail->send();

    // $admin->redirect1('../feedback.php');
    echo "<script>alert('Email sent successfully');window.location='../controller/donated_donors.php'</script>";
    //what you should do after sending mail

    exit();
} catch (Exception $e) {

    //error if somthing went wrong

    echo '<script>alert("Email could not be sent.")</script>';
}
?>