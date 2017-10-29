<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/10/17
 * Time: 10:53
 */

class listaPdfController extends Controller
{

    public function index()
    {
        $dados = array();
        $prod = new Produto();
        $id = $_SESSION['login'];
        $dados = array("prod" =>$prod->getAllProduto($id));

        $this->loadView('listaPdf', $dados);
    }

}