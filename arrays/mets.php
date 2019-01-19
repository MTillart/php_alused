<?php
//Massiivid ül 5-Metshein
$nimed = array('Adord', 'Catra', 'Climmer', 'Bow', 'Etheria');

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
//massiivi täiendamine
array_push($nimed, "Swift Wind", "Shadow Weaver");
echo "<br>";
print_r($nimed);
echo "<br>";
$eemaldatud = array_pop ($nimed);
echo "Eemaldati: $eemaldatud";
//massiivist v'ljastamine
echo "<br>";
echo "Nimede massiivis on ".count($nimed)." elementi.";
echo "<br>";
sort($nimed);
print_r($nimed);
echo "<br>";
//Mitme mõõtmelised massiivid
$karakterid = array(
    "Adora" => array("nimi"=>"Adora", "vanus"=> 23, "kirjeldus"=> "Superkangelane"),
    "Catra"=> array("nimi"=>"Catra ", "vanus"=> 25, "kirjeldus"=> "Antikangelane, Kassnaine"),
    "Bow"=> array("nimi"=>"Bow", "vanus"=> 20, "kirjeldus"=> "SideKick")
);
foreach ($karakterid as $tegelane => $andmed){
    echo "$tegelane - ";
    foreach ($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}



