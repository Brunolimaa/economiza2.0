<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 16:39
 */
$config = array();

$config['dbuser'] = 'root';
$config['dbpass'] = '';
$config['host'] = 'localhost';
$config['dbname'] = 'economiza';

global $db;
try {
    $db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']);
    //return $db;
} catch(PDOException $e) {
    echo "Erro na conexao: ".$e->getMessage();
    exit;
}