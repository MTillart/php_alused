<?php
session_start();
require_once 'fnk.php';

if(isset($_SESSION['user'])){
    echo 'Tere Tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<a href="acts/logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}
