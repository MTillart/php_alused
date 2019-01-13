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
$tekst4 = "In the end, <b>We are what <a href='#'>we</a> </b><i>are</i>";
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
while ($leia_tekstist = strpos($tekst4, $otsitav, $nihe)){
    echo $leia_tekstist."<br>";
    $nihe = $leia_tekstist+strlen($otsitav);
}
echo '<br>';

