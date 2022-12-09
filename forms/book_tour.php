<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//sesuaikan name dengan di form nya ya 
$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$date_departure = $_POST['date_departure'];
$pax = $_POST['pax'];
$message = $_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

//pengirim
$mail->setFrom('noreply@balitouryes.com');
$mail->addAddress('book@balitouryes.com');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Book Tour Package - '. $package;
$mail->Body    = '<div style="width: 750px; margin: 0 auto;">
        <div style="width: 100%; padding-bottom: 1rem; padding-top: 1rem; text-align: center; border-top: solid 5px #46413d; background-color: #46413d">
        <h1 style="color: white;">Book Tour Package</h1>        
        </div>
        <table style="width: 100%; font-size: 14px; padding-top: 1rem; padding-bottom: 1rem; background-color: #f7f7f7">
        <tbody>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Package</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $package .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Car</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $car .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Full Name</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $name .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Email</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $email .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Phone</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $phone .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Date Departure</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $date_departure .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Pax</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $pax .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Message</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $message .'</td>
        </tr>
        </tbody>
        </table>
        <div style="width: 100%; text-align: center; background-color: #46413d; padding-bottom: 1rem; padding-top: 1rem; color: #fff; font-size: 75%;">
        <p align="center">Copyright 2022 Balitouryes.com</p>
        </div>
        </div>';
$mail->AltBody = '';
//$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
//$mail->addAttachment(''); 

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
//redirect ke halaman index.php
echo "<script>alert('Book has ben send!');window.location='https://balitouryes.com/';</script>";


?>