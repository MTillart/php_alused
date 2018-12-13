<?php
// tingimuslaused
// if(tingimus) {
// tegevused, mis toimuvad kui tingimus kehtib
//} else if{
// tegevused, mis toimuvad kui tingimus 1 ei kehti ja kehtib tingimus 2
// }else

echo '<h4>Tingimuslaused</h4>';

$foor = 'kollane';

switch ($foor) {
    case 'punane':
        echo '<p style="color: red">Punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: yellow">Kollane!</p>';
        break;
    case 'roheline':
        echo '<p style="color: yellow">Roheline!</p>';
        break;
    default:
        echo '<p>mingi teine</p>';
        break;
}

