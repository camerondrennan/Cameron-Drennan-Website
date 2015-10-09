<?php
/**
 * Created by PhpStorm.
 * User: Cameron
 * Date: 08/10/2015
 * Time: 23:07
 */

$to = "me@camerondrennan.com";
$subject = "Message From " . $_POST["name"];
$txt = $_POST["message"];
$headers = "From: " . $_POST["email"];

mail($to,$subject,$txt,$headers);

$host  = $_SERVER['HTTP_HOST'];
$extra = 'index.php?type=contact&sent=yes';
header("Location: http://$host/$extra");
exit;