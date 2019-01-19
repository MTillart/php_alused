<?php

$nimed = array(1=>'Adord', 'Catra', 'Climmer', 'Bow', 'Etheria');
for($nr = 0; $nr<count($nimed);$nr++){
echo $nimed[$nr]."<br>";
}
echo "<br>";
//tsükkel tükklis
for ($rida=1; $rida<=5; $rida++){
    for($veerg=5; $veerg>=$rida; $veerg--){
        echo "*";
    }
    echo "<hr>";
}
echo "<br>";
for($arv=1; $arv<=10; $arv++){
    if($arv<=3){
        break;
    }
    echo $arv."<br>";
}
echo "<br>";
$kokku = count($nimed);

for($jk=1;$jk<=$kokku;$jk++){
    if($jk<$kokku){
        continue;
    }
    echo $nimed[$nr]."<br>";
}
//Ülesanne 6
for($kk=1;$kk<=5; $kk++){
    for($jj=1; $jj<=$kk*2;$jj++){
        echo "--";
    }
    echo" *<br>";
}
echo "<br>";
for($kk=1;$kk<=5; $kk++){
    for($jj=1; $jj<=$kk;$jj++){
        echo "$jj";
    }
    echo "<br>";
}
