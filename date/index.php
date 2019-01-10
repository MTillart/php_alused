<?php
//sekundid 1970ndast aastast
echo time();
echo "<br>";
//kasutaja sõbralik kuupäeva kuvamine
echo date("d.m.Y G:i", time());
echo "<br>";echo "<br>";
//õige ajavööndiga kell
date_default_timezone_set("Europe/Tallinn");
echo date("d.m.Y G:i", time());
echo "<br>";
//pika kuupäeva eestistamine
echo date('d.F.Y');
echo "<br>";
echo "<hr>";
//loome massiivi, et sinna siestada eesti keelsed kuupäevad
//kuude massiic
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
echo "<hr>";
//mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg)
$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);
echo "<br>";
echo date('d.m.Y G:i' , time()+60);
echo "<br>";
$sp = mktime(0,0,0,10,29,1969+27);
echo date('d.m.Y', $sp);
echo "<br>";
echo strtotime("yesterday");
echo "<br>";
echo strtotime("last Monday");
echo "<hr>";
//kuupäeva valideerimine
if(checkdate(01,11,2013)){
    echo('Kuupäev korras!');
    }else{
    echo ('Kuupäev on valesti sisestatud');
}
//Ülesanne 8
echo "<hr>";
echo "<h3>Ülesanne 8</h3>";
echo date("d.m.Y G:i", time());
$eesti_nadal = array(1=>'esmaspäev','teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$nadal = $eesti_nadal[date('N')];
echo "<br>";
echo $nadal.' '.$paev.'.'.$kuu.' '.$aasta;
echo "<hr>";
$now = time();
$jaanipaev = strtotime("2019-06-24");
$datediff = $jaanipaev - $now;

$jaanini = round($datediff / (60 * 60 * 24));
echo "2019 jaanipäevani on jäänud $jaanini päeva";
echo '<br>';
$my_birth = strtotime("1994-03-31");
$your_birth = strtotime("1980-11-29");
$birth_vahe = $my_birth - $your_birth;
$tulemus = round($birth_vahe / (60 * 60 *24 * 365));
echo "Vahe on $tulemus aastat";
echo "<hr>";
if(checkdate(02,29,2016)){
    echo('Kuupäev korras!');
}else{
    echo ('Antud kuupeva ei eksisteeri');
}
echo "<hr>";
$vanus = round($my_birth/ (60 * 60 *24 * 365));
echo 'Minu vanus praegu: '.$vanus;
$vanus_next = $vanus+1;
echo '<br>';
if ($vanus_next == 30) {
    echo('Sul on järgmine aasta juubel');
    } elseif ($vanus_next== 25){
    echo ('Sul järgmine aasta pooljuubel');
    }else {
        echo ('Sul ei ole järgmine aasta juubel');
    }
echo "<hr>";

$aeg = date("G.i");

echo $aeg;

echo "<br>";
if ($aeg>8.00 AND $aeg<13.00){
    echo "Tere ss";
}elseif ($aeg>13.00 AND $aeg<17.00){
    echo "Tere päevast";
}else{
    echo "Tere õhtust";
}