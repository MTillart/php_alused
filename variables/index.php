<?php
//muutuja defineerja
//$muutujaNimi = väärtus;

$arv1 = 7;
$arv2 = 24;


echo '<h4>Matemaatikalised operaatorid</h4>';
echo $arv1.'+'.$arv2.' = '.($arv1 + $arv2).'<br>';
echo $arv1.'-'.$arv2.' = '.($arv1 - $arv2).'<br>';
echo $arv1.'*'.$arv2.' = '.($arv1 * $arv2).'<br>';
echo $arv1.'/'.$arv2.' = '.($arv1 / $arv2).'<br>';
echo $arv1.'%'.$arv2.' = '.($arv1 % $arv2).'<br>';

echo '<hr>';

echo '<h4>Võrdlus operaatorid<h4>';

echo $arv1.'<'.$arv2.' see on '.($arv1 < $arv2).'<br>';
echo $arv1.'>'.$arv2.' see on '.($arv1 > $arv2).'<br>';
echo $arv1.'<='.$arv2.' see on '.($arv1 <= $arv2).'<br>';
echo $arv1.'>='.$arv2.' see on '.($arv1 >= $arv2).'<br>';
echo $arv1.'=='.$arv2.' see on '.($arv1 == $arv2).'<br>';
echo $arv1.'!='.$arv2.' see on '.($arv1 != $arv2).'<br>';

