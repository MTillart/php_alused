<?php
echo '<h1>Tellimine</h1>';
//lisab vormist saadud andmed muutujasse
$loom = $_GET['loom'];
$lind = $_GET['lind'];
$kala = $_GET['kala'];
$raadius = $_GET['raadius'];
$korgus = $_GET['korgus'];

$kera_ruumala = round(4/3*3.14*pow($raadius,3),1);
$pindala_pohi = round(3.14*pow($raadius, 2),1);
$koonuse_ruumala = round(1/3*$pindala_pohi*$korgus,1);
$silindri_ruumala = round($pindala_pohi*$korgus,1);


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
echo 'Põhja pindala: '.$pindala_pohi.'cm<sup>2</sup><br>';
echo 'Koonuse ruumala: '.$koonuse_ruumala.'cm<sup>3</sup><br>';

echo '<br>';

echo '<h2>Silindri ruumala</h2>';
echo 'Silindri ruumala: '.$silindri_ruumala.'cm<sup>3</sup><br>';


echo '<br>';


