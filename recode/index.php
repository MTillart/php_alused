<?php
?>
<menu>
    <a href="index.php">Siin me oleme</a>
    <a href="kompass.php">Kompass</a>
    <a href="raamat.php">Raamat</a>
    <a href="oksaraas.php">Oksaraas</a>
</menu>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('kompass', 'raamat', 'oksaraas');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    }
} else{
    echo 'Valitud leht ei eksisteeri';
}
?>

<h2> Siin me oleme</h2>
<p>
    Kenal suvepäeval veereb ühe Muhumaa rahuliku talu õuele väike sapakas, kust ilmub välja kummaline seltskond: võimukas proua, tema käpa all olev kiitsakas abikaasa ning salapärane punapäine kaunitar. Nad teatavad, et tulid tallu puhkust veetma.
    Rahulikust puhkusest kujuneb nii pealinnast tulnud suvitajate kui neid võõrustavate muhulaste jaoks meeletu sündmuste virvarr. Kapriise ja kuraasi täis Kohviveski keerab taluelu pea peale. Nappidesse suveöödesse mahuvad veel kosjad, vastastikune rammukatsumine, angerjad lakas ja palju muud.</p>
