<?php
/
/* for tsükkel
 for(@jm = alg; $jm < lopp;$jm++) {
  tegevused, mis sooritatakse nii kaua kui tsükli $jm
väärtus on väiksem kui lõppväärtus*/

echo '<h4> Tsüklid -for</h4>';
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'green';
    }else {
        $varv = 'red';
    }
    echo '<p style="color: '.$arv.'">'.$arv.'</p>';
}

$varv = '#';
echo '<table>';
for($rida = 1; $rida <= 6; $rida++) {
    $varv = $varv.rand(0,9).rand(0,9).rand(0,9);
    echo '<tr>'
        echo '<td style="background: '.$varv.'">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    echo '</tr>';
}