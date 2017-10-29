<?php
require "environment.php";
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 16:39
 */
$config = array();

if(ENVIRONMENT == 'development'){
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    $config['host'] = 'localhost';
    $config['dbname'] = 'economiza';
}else{
    $config['dbuser'] = 'econo583_adm';
    $config['dbpass'] = 'BrunoDaniloLuan';
    $config['host'] = 'br444.hostgator.com.br';
    $config['dbname'] = 'econo583_adm';
}


global $db;
try {
    $db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']);
    //return $db;
} catch(PDOException $e) {
    echo "Erro na conexao: ".$e->getMessage();
    exit;
}