<?php
// tingimuslaused
// if(tingimus) {
// tegevused, mis toimuvad kui tingimus kehtib
//} else if{
// tegevused, mis toimuvad kui tingimus 1 ei kehti ja kehtib tingimus 2
// }else

echo '<h4>Tingimuslaused</h4>';

$arv = rand(0, 100); //juhuslik täisarv
$varv = '';

if($arv > 0 and $arv < 25) {
    // roheline
    $varv = 'green';
}else if ($arv >25 and $arv < 50) {
    // punane
    $varv = 'red';
}else if ($arv >50 and $arv < 75) {
    // sinine
    $varv = 'blue';
}else if ($arv >75 and $arv < 101) {
    // punane
    $varv = 'orange';
}
    echo '<p style="color: '.$varv.'">'.$arv.'</p>';

