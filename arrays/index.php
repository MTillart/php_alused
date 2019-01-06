<?php
$kasutajad = array(
    array(
        'cat',
        'Marru',
        'Barbar',
        'male'
    ),
    array('fish',
        'Kubo',
        'Flop',
        'female'
        ),
);
for($i = 0; $i < count($kasutajad); $i++) {
    foreach ($kasutajad[$i] as $info) {
        if ($kasutajad[$i][3] == 'female') {
            echo '<div style="color: crimson">';
        } else {
            echo '<div style="color: darkblue">';
        }
        echo $info.'</div>';
    }
    echo '<hr>';
}
echo '<hr>';
//Massiivi töötlus
$loomad[] = 'Kass';
$loomad[] = 'Orav';
$loomad[] = 'Hunt';
$loomad[] = 'Kits';

$linnud = array('Kajakas', 'Kotkas', 'Pistrik', 'Leevike');
$linnud[] = 'Varblane';
echo "$loomad[3]";
echo '<br>';
echo "$linnud[2]";
echo '<br>';
echo '<hr>';
//Sidestatud massiiv
$tegelane = array (
    'name'=>"Voldemor",
    'occupation'=>"wizard",
    'age'=>"Unknown",
    'series'=>"Harry Potter"
);
echo $tegelane['name'];
echo '<br>';

$tegelane2['name'] = 'Lara Croft';
$tegelane2['occupation'] = 'Adventurer';
$tegelane2['age'] = '26';
$tegelane2['series'] = 'Tomb Raider';

echo $tegelane2['series'];
echo '<br>';
echo '<hr>';

//Mitme mõõtelised massiivid
$mituTegelast = array( array (
    'name'=>"Voldemor",
    'occupation'=>"wizard",
    'age'=>"Unknown",
    'series'=>"Harry Potter"),
    array(
        'name'=>"Scarlett Ohara",
        'occupation'=>"Business woman",
        'age'=>"28",
        'series'=>"Gone With the Wind"),
    array(
        'name'=>'Diana Prince',
        'occupation'=>'Superhero',
        'age'=>'immortal',
        'series'=>'Wonder Woman'
    ),
);
echo $mituTegelast[0]['series'];
echo '<br>';
echo $mituTegelast[1]['name'];
echo '<br>';
echo $mituTegelast[2]['age'];
echo '<br>';
echo '<hr>';
//Massiivi koht info hankimine-viimane element
print $loomad[count($loomad)-1];
echo '<br>';
echo '<hr>';
///Massiivi läbivaatamine - FOREACH

foreach ($loomad as $val) {
    echo "$val<br>";//double jutumärgid on olulised
}
echo '<hr>';
//Sidestatud massiivi läbivaatamine
foreach ($tegelane2 as $key=>$val){
    print "$key = $val<br>";
}
echo '<hr>';
//Mitme mõõtmelise massiivi väljastamine
foreach ($mituTegelast as $val){
    foreach ($val as $key=>$final_val){
        print "$key: $final_val<br>";
    }
    print "<br>";
}//MASSIIVIDE JUHTIMINE

//Massiivide  ühendamine -merge
$first = array('a', 'b', 'c');
$second = array(1, 2, 3);
$third = array_merge($first, $second);
foreach ($third as $val){
    print "$val<br>";
}
echo '<hr>';
//Massiivi elementide lisamine (push)
$total = array_push($first, 1, 2, 3);
print "There are $total elements in \$first<p>";
foreach ($first as $val){
    print "$val<br>";
}
echo '<hr>';
//Esimese elemedni kustuamine (array_shift)
$an_array = array('a', 'b', 'c');
while (count($an_array)){
    $val = array_shift($an_array);
    print "$val<br>";
    print "there are ".count($an_array)." elements in \$an_array<br>";
}
echo '<hr>';

//Massiivi osa eraldamine (array_slice)
$esimene = array ('a', 'b', 'c' , 'd', 'e', 'f');
$teine = array_slice($esimene, 2, 3);
foreach ($teine as $var ){
    print "$var<br>";
}
echo '<hr>';

//Massiivi sorteerimine (sort)
$the_array = array('x', 'a', 'm', 'h');
sort($the_array);
foreach ($the_array as $var){
    print "$var<br>";
}
echo '<hr>';
//Sidestatud massiivi sorteerimine (asort)
asort($tegelane2);
foreach ($tegelane2 as $key=> $val){
    print "$key = $val<br>";
}
echo '<hr>';

//Sidestatud massiivi sorteerimine  (ksort)
ksort($tegelane2);
foreach ($tegelane2 as $key=> $val){
    print "$key = $val<br>";
}
echo '<hr>';
