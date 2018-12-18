<?php
$kasutajad = array();//tühi massiiv
//andmete lisamine
$kasutajad[]= 'Alice';
$kasutajad[]= 'Aice';
array_push($kasutajad,'Aucy');

$lisaKasutajad = array('Mup', 'Geene'); //andmetega massiiv

$kasutajadKokku = count($kasutajad);
for($i=0;$i< $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}

array_shift($kasutajad);
for($i=0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}
$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for($i=0; $i< $kasutajadKokku; $i++){
    echo $uuedKasutajad[$i].'<br>';
}
echo '<hr>';

foreach ($uuedKasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}
echo '<hr>';