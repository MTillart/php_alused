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
