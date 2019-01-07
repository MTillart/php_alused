<?php
echo '<h1>Tellimine</h1>';
//lisab vormist saadud andmed muutujasse
$loom = $_GET['loom'];
$lind = $_GET['lind'];
$kala = $_GET['kala'];
$raadius = $_GET['raadius'];
$korgus = $_GET['korgus'];

$kera_ruumala = round(4/3*3.14*pow($raadius,3),1);
$pindala_pohi =



echo 'Loom: '.$loom.'<br>';
echo 'Lind: '.$lind.'<br>';
echo 'Kala: '.$kala.'<br>';
echo 'raadius: '.$raadius.'cm'.'<br>';
echo 'korgus: '.$korgus.'cm'.'<br>';
echo '<hr>';
echo '<h2>Kera ruumala</h2>';
echo 'ruumala: '.$kera_ruumala.'cm<sup>3</sup><br>';
echo '<br>';




echo '<h2>Koonuse ruumala</h2>';
echo '<br>';




echo '<h2>Silindri ruumala</h2>';
echo '<br>';


