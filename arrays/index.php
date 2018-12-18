<?php
$kasutajad = array();//tühi massiiv
//andmete lisamine
$kasutajad[]= 'Alice';
$kasutajad[]= 'Mice';
array_push($kasutajad,'lucy');

$lisaKasutajad = array('Mup', 'Geene'); //andmetega massiiv
echo '<pre>';
print_r($kasutajad);
print_r($lisaKasutajad);
echo '</pre>';
//var_dump($kasutajad);
