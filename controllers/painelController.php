<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08/09/17
 * Time: 23:30
 */

class painelController extends Controller
{
    public function __construct()
    {
        if(empty($_SESSION['login'])){
            header('location: http://localhost/economiza2.0/login');
        }
    }

    public function index()
    {
        $data = array();
        $produto = array();
        $id_mercado =  $_SESSION['login'];
        $prod = new Produto();
        $produto = $prod->getAllProduto($id_mercado);

        $cadastrado = false;
        foreach($produto as $produ){
            //Verifica se a lista foi salva
            if($produ['lista_cadastrada'] == 1){
                $cadastrado = true;
            }
        }

        $produto = array("produto" => $produto);
        //se a lista foi salva, entao redireciona para os produtos cadastrados
        if($cadastrado == true){
            $this->loadTemplateLista('listaProdutosCad', $produto);
        }else{
            $this->loadTemplate('painel', $data);
        }
    }

    public function promocao()
    {
        $data = array();
        $prod = new Produto();
        $id_mercado =  $_SESSION['login'];
        $data = array("promocoes" => $prod->showPromocao($id_mercado));
        $this->loadTemplate('promocao',$data);

    }

    public function lixo()
    {
        $data = array();
        $prod = new Produto();
        $id_mercado =  $_SESSION['login'];
        $data= array("data_del" => $prod->dataListaExcluida($id_mercado));
        $this->loadTemplate('lixo',$data);

    }

    public function listarExcluido()
    {
        $data = array();
        $prod = new Produto();
        $id_mercado =  $_SESSION['login'];
        $data_del = addslashes($_POST['dataDel']);
        $dados = $prod->recuperarLista($data_del, $id_mercado);

        foreach($dados as $dado){
            echo '<tr>';
                echo '<td>'.utf8_encode($dado['nome']).'</td>';
                echo '<td>'.utf8_encode($dado['marca']).'</td>';
                echo '<td>'.$dado['descricao'].'</td>';
                echo '<td>'.$dado['preco'].'</td>';
                echo '<td>'.$dado['validade'].'</td>';
            echo '</tr>';
        }

    }

    public function recuperar()
    {
        $data = array();
        $prod = new Produto();
        $id_mercado =  $_SESSION['login'];
        $data_del = addslashes($_POST['dataDel']);
        $prod->utilizarListaRecuperada($id_mercado, $data_del);
    }

}