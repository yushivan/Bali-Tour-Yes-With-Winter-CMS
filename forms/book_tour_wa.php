<?php

$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$date_departure = $_POST['date_departure'];
$pax = $_POST['pax'];
$message = $_POST['message'];

$link = 'https://wa.me/6281805630004?text=Book%20Tour%20Package%0APackage%20%3A%20'.$package.'%0ACar%20%3A%20'.$car.'%0AFullname%20%3A%20'.$name.'%0AEmail%20%3A%20'.$email.'%0APhone%20%3A%20'.$phone.'%0ADate%20Departure%20%3A%20'.$date_departure.'%0APax%20%3A%20'.$pax.'%0AMessage%20%3A%20'.$message.'%0A';

return header('Location: '.$link);

?>