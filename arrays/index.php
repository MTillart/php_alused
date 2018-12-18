<?php
$kasutajad = array();//tühi massiiv
//andmete lisamine
$kasutajad[]= 'Alice';
$kasutajad[]= 'Mice';
array_push($kasutajad,'lucy');

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
