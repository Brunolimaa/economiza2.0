<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 16/09/17
 * Time: 14:05
 */

class ajaxController extends Controller
{
    public function index()
    {
        $data = array();

        $prod = new Produto();
        $data = $prod->getProduto(1);

        $this->loadView('ajax',$data);

    }

    public function editar()
    {
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $produtoEdit = $prod->getProdutoSele($id);
        echo json_encode($produtoEdit);
    }

    public function cadastro()
    {
        $prod = new Produto();
        $data = array();

        $produto = addslashes($_POST['prod']);
        $marca = addslashes($_POST['marca']);
        $desc = addslashes($_POST['desc']);
        $valor = addslashes($_POST['valor']);
        $val = addslashes($_POST['validade']);

        $prod->setCadastro($produto, $marca,$desc, $valor, $val);

       // var_dump($valor);

        //echo $produto." - ".$marca." - ".$desc." - ".$valor." - ".$val;
        $this->loadView('ajax',$data);

    }

    public function excluir()
    {
        $data = array();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $prod->excluirProduto($id,1);
        $this->loadView('ajax',$data);

    }

    public function update()
    {
        $id = $_POST['id'];
        $prod = $_POST['prod'];
        echo $id." - ".$prod;
    }
}