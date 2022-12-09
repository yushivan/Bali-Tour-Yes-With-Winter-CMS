<?php

$name = $_POST['name'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$date_rent = $_POST['date_rent'];
$time_rent = $_POST['time_rent'];
$rent_duration = $_POST['rent_duration'];
$location = $_POST['location'];

$link = 'https://wa.me/6281805630004?text=Rent%20Car%0ACar%20%3A%20'.$car.'%0AFullname%20%3A%20'.$name.'%0APhone%20%3A%20'.$phone.'%0ADate%20Rent%20%3A%20'.$date_rent.'%0ATime%20Rent%20%3A%20'.$time_rent.'%20Hour%0ARent%20Duration%20%3A%20'.$rent_duration.'%20Day%0ALocation%20%3A%20'.$location.'';

return header('Location: '.$link);

?>