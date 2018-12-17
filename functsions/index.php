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

echo '<hr>';
$num = -321;
$newnum = abs($num);
echo $newnum;
echo '<hr>';

function bigUniverse(){
    echo'<h1>UNIVERSE!</h1>';
}
bigUniverse();
echo '<hr>';
function printBR($txt) {
   print ("$txt<br>\n");
}
printBR('this is a universe');
printBR('this is a new universe');
printBR('this is a yet another universe');
echo '<hr>';

function addNums($firstnum, $secondnum){
   $result = $firstnum + $secondnum;
   return $result;
}
print addNums(3, 5);
echo '<hr>';
function sayUniverse(){
    print "Universe<br>";
}
$hold_func = "SayUniverse";
$hold_func();
echo '<hr>';
function test() {
    $testvaraible ="this is a test variable";
    }
echo "test variable: $testvaraible";
echo '<hr>';

$life = 'to live';
function meaningOfLife(){
    global $life;
    print "Te meaning of life is $life<br>";
}
meaningOfLife();
echo '<hr>';

function andAnother($txt){
    static $num_of_calls = 0;
    $num_of_calls;
    $num_of_calls++;
    echo "<h3>$num_of_calls. $txt</h3>";
}
andAnother('Animals');
echo 'Living and breathing with us';
andAnother(Birds);
echo 'Wings flapping all around';
echo '<hr>';
