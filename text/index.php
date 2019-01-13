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


