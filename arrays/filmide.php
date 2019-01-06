<?php

$filmid = array(
    $drama = array(
        'Name' =>"Drama",
        "Films"=>'Gone With the Wind', 'Silver Linings Playbook', 'Black Swan'),
    $comedy = array(
        'Name' =>"Comedy",
        "Films"=>'Spy', 'Gold Rush', 'Hot Fuzz'),
    $romance = array(
        'Name' =>"Western",
        "Films"=>'The Revenant', 'The Lone Ranger', 'The Good, the Bad and the Ugly')
);
foreach ($filmid as $val){
    foreach ($val as $key=>$final_val){
        print "$key: $final_val<br>";
    }
}