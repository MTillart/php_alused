<?php
//muutuja defineerja
//$muutujaNimi = väärtus;

$taisArv = 7;
$reaalArv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = false;

echo 'täisarv = '.$taisArv.'<br>';
echo 'Reaalarv = '.$reaalArv.'<br>';
echo 'sõne = '.$sone.'<br>';
echo 'Tõde = '.$toevaartusTrue.'<br>';
echo 'Väär = '.$toevaartusFalse.'<br>';

echo gettype($sone).'<br>';
settype($sone, 'int');
echo gettype($sone);