<?php

/**
 * @param $hostName
 * @param $dbUser
 * @param $dbPass
 * @param $dbName
 * @return mysqli
 * Antud funktsiooni kasutame selleks, et tekitada ühendust andmebaasiga
 */

//impordime andmebaasi andmed
require_once 'conf.php';
require_once 'db_fnk.php';
// katsetame ühenduse loomiset ikt serveriga
// kõik andmed -  cPaneli kaudu loodud kastaja, parool ja andmebaasi nimi
// localhost - veebiserver ja andmebaasiserver asuvad samas ikt masinas
$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
//insert/update tüüpi sql testimine
$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id = 1';
$res = query($sql, $iktConn);

// select tüüpi sql testimine

$sql = 'SELECT * FROM user';
$users = getData($sql, $iktConn);

echo '<pre>';
print_r($users);
echo '</pre>';

echo 'Tere, '.$users[0]['first_name'].' '.$users[0]['last_name'].'<br>';