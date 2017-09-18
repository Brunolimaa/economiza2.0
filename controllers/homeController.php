<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 16:54
 */

class homeController extends Controller
{
    public function index() {
        $n = new Pessoa();
        $data = array("nome"=>$n->getNome());
        $this->loadTemplate('home', $data);
    }
}