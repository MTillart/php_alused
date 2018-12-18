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
