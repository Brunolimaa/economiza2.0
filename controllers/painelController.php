<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08/09/17
 * Time: 23:30
 */

class painelController extends Controller
{
    public function index()
    {
//        $prod = new Produto();
//        $data = $prod->getProduto(1);
        $data = array();
        $this->loadTemplate('painel', $data);
    }

}