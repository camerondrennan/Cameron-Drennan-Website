<?php
/**
 * Created by PhpStorm.
 * User: Cameron
 * Date: 02/09/2015
 * Time: 16:31
 */

//for devweb ubuntu...
DEFINE ('DB_HOST', 'mysql.camerondrennan.com');
DEFINE ('DB_USER', 'camerondrennan');
DEFINE ('DB_PASSWORD', 'Strathclyde1');
DEFINE ('DB_NAME', 'camerondrennan');

// Make the connection:
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($link, DB_NAME) or die(mysqli_connect_error());