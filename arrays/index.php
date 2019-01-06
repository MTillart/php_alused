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



