<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/10/17
 * Time: 02:42
 */

class produtoAppController extends Controller
{
    public function index()
    {
        $data = array();
        $mec = new Mercado();
        $data = array("mercados" =>$mec->listaMercadosAtivo());
        $this->loadTemplate('produtoApp', $data);
    }

    public function listaproduto()
    {
        $json = new ListaJson();
        $prod = new Produto();
        $produto = $json->listaProduto();
        $produto = $prod->utf8_converter($produto);
        echo json_encode(array("produtos"=>$produto));
    }

    public function listapromocao()
    {
        $json = new ListaJson();
        $prod = new Produto();
        $produto = $json->listaPromocao();
        $produto = $prod->utf8_converter($produto);
        echo json_encode(array("promocao"=>$produto));
    }

    public function listaendereco()
    {
        $json = new ListaJson();
        $prod = new Produto();
        $produto = $json->listaEndereco();
        $produto = $prod->utf8_converter($produto);
        echo json_encode(array("endereco"=>$produto));

    }

    public function excluirApp()
    {
        $prod = new Produto();
        $produto = $prod->excluirListaApp();
        var_dump($produto); exit();
    }

}