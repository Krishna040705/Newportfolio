<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");

$file = fopen("resume_visitors.csv","a");
fputcsv($file, [$name,$email,$company,$ip,$time]);
fclose($file);

header("Location: Krishna_Sreenivas_S_Resume.pdf");
exit();
?>
