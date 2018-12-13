<?php
// tingimuslaused
// if(tingimus) {
// tegevused, mis toimuvad kui tingimus kehtib
//} else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }

echo '<h4>Tingimuslaused</h4>';

$arv = rand(0, 100); //juhuslik täisarv

if($arv % 2 == 0) {
    echo '<p style="color: green">'.$arv.'</p>';
}else{
    echo '<p style="color: red">'.$arv.'</p>';
}