<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/10/17
 * Time: 01:00
 */

class adminController extends Controller
{
    public function __construct()
    {
        if(empty($_SESSION['login'])){
            //header('location: http://localhost/economiza2.0/login');
        }
    }

    public function index()
    {
        $data = array();
        $merc = new Mercado();
        $prod = new Produto();
        $verifica = $prod->verificaStatus();
       // var_dump($verifica); exit();
        $mercado = array('mercadoApp' => $verifica);
        $data = array("mercados" => $merc->listaMercados());

        $status = false;
        if($verifica == null){
           $status = false;
       }else{
           $status = true;
       }

        if($status == true){
            $this->loadTemplate('listaApp', $mercado);
        }else{
            $this->loadTemplate('Admin', $data);
        }

    }
}