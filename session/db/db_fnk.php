<?php
function connect_db($hostName, $dbUser, $dbPass, $dbName){
    //ühenduse andmed salvestame ¤conn muutuja sisse,
    //sele kaudu saame serveile saata päringud jms
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);
    //kui ühendust mingi põhjusega ei ole
    //väljastame vastava veateate ja MySQL vea kirjelduse
    //ning lõpetame KOODI EDASISE TÖÖ exit käsuga
    if(!$conn){
        echo 'unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }
    //selleks, et saaks edasipidi ühenduse andmeid kasutada, tagastame
    //need põhiprogrammile
    return $conn;
}

function query($sql, $conn){
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }

    return $result;
}

function getData($sql, $conn){
    $data = array();
    $result = query($sql, $conn);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
    return $data;
}