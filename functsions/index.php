<?php

/*function funktsiooniNimi[$param1, $param2, ..,)
        tegevused, mis toimubad funktsiooni sees
*/
echo '<hr>';
function numbriKordumine($arv, $kontrollNumber)
{
    echo 'Arv on '.$arv. '<br>';

        $numberKokku = 0;
        while($arv != 0) {
        $number = $arv % 10;
        if($number == $kontrollNumber) {
            $numberKokku = $numberKokku + 1;
        }
        $arv = $arv / 10;
     settype($arv, int);
}
echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.' korda<br>';
}

numbriKordumine(4515454511, 1);
numbriKordumine(51444441521, 4);
numbriKordumine(1112121, 1);

