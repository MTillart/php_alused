<?php
//Massiivid ül 5-Metshein
$nimed = array('Adord', 'Catra', 'Climmer', 'Bow', 'Erithre');

var_dump($nimed);
echo "<br>";
print_r($nimed);
echo "<br>";
foreach ($nimed as $nimi){
    echo "$nimi<br>";
}
echo "<hr>";
$karakter = array(
    "nimi"=> "Adora",
    "vanus"=> 23,
    "elukoht"=> "Horde",
    "rass"=> "Humangle",
    "elukutse"=> "Puudub"
);
echo $karakter["elukoht"];
echo "<br>";
foreach ($karakter as $atribuut => $omadus){
    echo "<li>$atribuut: $omadus </li>";
}
