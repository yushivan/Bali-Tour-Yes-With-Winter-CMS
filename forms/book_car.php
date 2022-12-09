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
$car = $_POST['car'];
$phone = $_POST['phone'];
$date_rent = $_POST['date_rent'];
$time_rent = $_POST['time_rent'];
$rent_duration = $_POST['rent_duration'];
$location = $_POST['location'];
// $message = $_POST['message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

//pengirim
$mail->setFrom('noreply@balitouryes.com');
$mail->addAddress('book@balitouryes.com');     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Rent Car - '. $car;
$mail->Body    = '<div style="width: 750px; margin: 0 auto;">
        <div style="width: 100%; padding-bottom: 1rem; padding-top: 1rem; text-align: center; border-top: solid 5px #46413d; background-color: #46413d">
        <h1 style="color: white;">Rent Car</h1>        
        </div>
        <table style="width: 100%; font-size: 14px; padding-top: 1rem; padding-bottom: 1rem; background-color: #f7f7f7">
        <tbody>
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
        <td style="width: 28%; padding: .5rem; color: #555;">Phone</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $phone .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Date Rent</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $date_rent .'</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Time Rent</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $time_rent .' Hour</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Rent Duration</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $rent_duration .' Day</td>
        </tr>
        <tr>
        <td style="width: 28%; padding: .5rem; color: #555;">Location</td>
        <td style="width: 2%;">:</td>
        <td style="width: 70%; padding: .5rem; font-weight: bold;">'. $location .'</td>
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