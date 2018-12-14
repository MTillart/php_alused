<?php

/* for tsükkel
 for(@jm = alg; $jm < lopp;$jm++) {
  tegevused, mis sooritatakse nii kaua kui tsükli $jm
väärtus on väiksem kui lõppväärtus*/
/*
echo '<h4> Tsüklid -for</h4>';
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'green';
    }else {
        $varv = 'red';
    }
    echo '<p style="color: '.$arv.'">'.$arv.'</p>';
}*/

$varv = '#';
echo '<table>';
for($rida = 1; $rida <= 6; $rida++) {
    $varv = $varv.rand(0,9).rand(0,9).rand(0,9);
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
 echo '<hr>';
echo '<table style="border-collapse: collapse">';
echo '<th style="width: 20px; text-align: center; background: aquamarine">'&nbsp'</th>';
for($arv2 = 0; $arv2 <= 10; $arv2++){
    if($arv2 == 0){
        $txt = 'nbsp;';
    }else{
        $txt = $arv2;
    }
    echo '<th style="width: 20px; text-align: center; background: aquamarine">';
    echo $arv1;
    echo '</th>';
    for($arv1 = 1; $arv1 <= 10; $arv1++){
        echo '<tr>';
        echo '<td style="width: 20px; text-align: center;">';
        echo $arv1 * $arv2.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

