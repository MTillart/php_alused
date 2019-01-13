<?php
$tekst = "Maybe life should be about more than just surviving";
echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';
echo ucfirst($tekst);
echo '<br>';
echo ucwords($tekst);
echo '<br>';
//Teksti pikkus
echo strlen($tekst);
echo '<br>';
echo str_word_count($tekst);
echo '<br>';
$tekst2 = '         Victory stands on the back of a sacrifice.      ';
echo "<pre>$tekst2</pre>";
echo '<br>';
echo '<pre>'.trim($tekst2)."</pre>";
echo '<br>';
echo '<pre>'.ltrim($tekst2)."</pre>";
echo '<br>';
echo '<pre>'.rtrim($tekst2)."</pre>";
echo '<br>';
$tekst3 = "In the end, we are what we are!";
echo trim($tekst3, "I, n, !");
echo '<br>';
$tekst4 = "In the end, <b>we are what <a href='#'>we</a> </b><i>are</i>";
echo strip_tags($tekst4, '<b>, <i>');
//tekst kui massiiv
echo '<br>';
echo $tekst4[4];
echo '<br>';
echo substr($tekst4, 3, 5);
echo '<br>';
echo substr($tekst4, 4, -15);
echo '<br>';
print_r(str_word_count($tekst3,1));
echo '<br>';
$sona = str_word_count($tekst4,1);
echo $sona[2];
echo '<br>';
//Tekstist otsimine
$otsitav = 'e';
$nihe = 0;
while ($leia_tekstist = strpos($tekst3, $otsitav, $nihe)){
    echo $leia_tekstist."<br>";
    $nihe = $leia_tekstist+strlen($otsitav);
}
echo '<br>';
//teksti asendamine
$asendus = 'you';
$otsitav = 'we';
//$otsitava_algus = 12;
//$otsitava_pikkus = 2;
$nihe1 = 12;
$asenduse_algus = strpos($tekst3, $otsitav, $nihe1);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst3, $asendus, $asenduse_algus, $asenduse_markide_arv);
echo '<br>';
$tekst5 = "Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga";
$otsi = array('lehma', 'saba', 'taga');
$asenda = array('koera', 'nina', 'ees');
echo str_replace($otsi, $asenda, $tekst5);
//Ülesanne 9
echo '<br><h3>Ülesanne 9</h3>';
$nimi = "meRliTi";
$nimi_fix = ucfirst(strtolower($nimi));
echo 'Tere '.$nimi_fix;
echo '<br>';
//$sisend = 'stalker';
//$tahe_algus = 0;
//$tahe_arv = strlen($sisend);
//echo $tahe_arv;
//$mitmes = 0;
//while ($mitmes = $tahe_arv){
//    echo $sisend[$mitmes];
//    $mitmes= $mitmes + 1;
//}
echo '<br>';
$lause = "Kurat, pole parata, inimesed on ikka nõmedad";
$eemalda = array('Kurat', 'nõmedad');
$paranda = array('***', '***');
echo str_replace($eemalda, $paranda, $lause);
echo '<br>';
//email
$nimi_pere = "Jänes Kõpsleja";
$alg_tahed = array('ä', 'ö', 'ü', 'õ');
$muut_tahed= array('a', 'o', 'y', 'o');
$nimi_pere_ok = strtolower(str_replace($alg_tahed, $muut_tahed, $nimi_pere));
echo "Nimi, ilma keelatud tähtedeta: ".$nimi_pere_ok;
echo '<br>';

$nimed = str_word_count($nimi_pere_ok, 1);
$eesnimi = $nimed[0];
$perenimi = $nimed[1];
echo 'eesnimi: '.$eesnimi;
echo '<br>';
echo 'perenimi: '.$perenimi;
//emaili loomine
echo '<br>';
$email = $eesnimi.'.'.$perenimi.'@khk.ee';
echo 'Email: '.$email;