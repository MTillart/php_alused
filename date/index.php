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