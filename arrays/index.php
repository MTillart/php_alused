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



