<?php
/**
 * Created by PhpStorm.
 * User: Cameron
 * Date: 02/09/2015
 * Time: 15:08
 */

$page_title = 'Cameron Drennan Glasgow Web Developer';

require('./includes/header.html');

//require('sql/mysql.inc.php');

$page_type = htmlspecialchars($_GET["type"]);

switch ($page_type) {
    case "home":
        require('./includes/home.html');
        break;
    case "about":
        require('./includes/about.html');
        break;
    case "portfolio":
        require('./includes/portfolio.html');
        break;
    case "contact":
        require('./includes/contact.html');
        break;
    default:
        require('./includes/home.html');
}

require('./includes/footer.html');