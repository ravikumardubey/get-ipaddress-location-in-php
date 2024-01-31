<?php
$ip = '164.100.205.198';
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
//echo "<pre>";print_r($details);die;
echo $details->city;
?>

