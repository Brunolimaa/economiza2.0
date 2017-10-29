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
        $id_mercado =  isset($_POST['id_mercado']) ? $_POST['id_mercado'] : $_SESSION['login'];
        $prod = new Produto();
        $data = $prod->getProduto($id_mercado);

        $this->loadView('ajax',$data);

    }

    public function editar()
    {
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $id_mercado =  isset($_POST['id_mercado']) ? $_POST['id_mercado'] : $_SESSION['login'];

        $produtoEdit = $prod->getProdutoSele($id_mercado,$id);
        $produtoEdit = $prod->utf8_converter($produtoEdit);
        echo json_encode($produtoEdit);
    }

    public function cadastro()
    {
        $prod = new Produto();
        $data = array();
        $id_mercado =  isset($_POST['id_mercado']) ? $_POST['id_mercado'] : $_SESSION['login'];

        $produto = addslashes($_POST['prod']);
        $marca = addslashes($_POST['marca']);
        $desc = addslashes($_POST['desc']);
        $valor = addslashes($_POST['valor']);
        $val = addslashes($_POST['validade']);

        $validade = explode("-",$val);
        $val = $validade[2]."-".$validade[1]."-".$validade[0];

        $prod->setCadastro($produto, $marca,$desc, $valor, $val, $id_mercado);

        //var_dump($val);

        //echo $produto." - ".$marca." - ".$desc." - ".$valor." - ".$val;
        $this->loadView('ajax',$data);

    }

    public function excluir()
    {
        $id_mercado =  isset($_POST['id_mercado']) ? $_POST['id_mercado'] : $_SESSION['login'];
        $data = array();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $prod->excluirProduto($id,$id_mercado);
        $this->loadView('ajax',$data);

    }

    public function update()
    {
        $data = array();
        $prod = new Produto();
        $id_mercado =  isset($_POST['id_mercado']) ? $_POST['id_mercado'] : $_SESSION['login'];
        $id = addslashes($_POST['id']);
        $produto  = addslashes($_POST['prod']);
        $marca = addslashes($_POST['marca']);
        $desc = addslashes($_POST['desc']);
        $valor = addslashes($_POST['valor']);
        $validade = addslashes($_POST['validade']);

        $validade = explode("-",$validade);
        $validade = $validade[2]."-".$validade[1]."-".$validade[0];

        /*
 * $p = Produto
 * $m = Marca
 * $d = Descricao
 * $v = Valor
 * $dv = Data de Vencimento
 * $id_mercado
 */
        //public function update($p, $m, $d, $v, $dv, $id, $id_mercado)

        $prod->update($produto, $marca, $desc, $valor, $validade, $id, $id_mercado);
        $this->loadView('ajax',$data);
    }

    public function promocao()
    {
        $data = array();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $id_mercado =  $_SESSION['login'];
        $prod->selePromocao($id, $id_mercado);

        $this->loadView('ajax', $data);
    }

    public function removepromo()
    {
        $data = array();
        $id = addslashes($_POST['id']);
        $id_mercado =  $_SESSION['login'];
        $prod = new Produto();
        $prod->removePromo($id, $id_mercado);
        $this->loadView('ajax', $data);
    }

    public function autoload()
    {
        $prod = new Produto();
        $data = array();
        $id_mercado =  $_SESSION['login'];
        $produto = addslashes($_POST['prod']);
        $produto1 = $prod->autoload($produto);

        foreach($produto1 as $produ){
            //echo json_encode($produ);
            //echo "<tr>";
            $id = $produ['id_prod'];
            $img = $produ['foto'];
            echo "<li style='background-color: #fff;
                                padding: 10px;
                                    border: 1px solid rgba(15, 45, 73, 0.12);'>
                    <a href='#' onclick='idAutoload($id)'>".utf8_encode($produ['nome'])." ".utf8_encode($produ['marca'])." ".utf8_encode($produ['descricao'])."</a><img src='public/image/".$img."' style='width: 30px; margin: 0px 15px;'></li>";

            //echo "</tr>";
        }
    }

    public function seleautoload()
    {
        $prod = new Produto();
        $id = addslashes($_POST['id_prod']);
        $produto = $prod->seleautoload($id);
        $produto = $prod->utf8_converter($produto);
        echo json_encode($produto);
    }



    public function importe($cadXls)
    {
        $arq = $_FILES['arq'];

       //var_dump($arq); exit();

        if($arq['type'] != 'application/vnd.ms-excel'){

            echo "<script>swal(
                'Formato incompativel',
                'por favor importar somente arquivo XLS.',
                'error'
            );</script>"; exit();
        }
        $nomearq = str_replace(' ','',$arq['name']);
        move_uploaded_file($arq['tmp_name'], 'public/anexo/'.$nomearq);


        //var_dump($arq['name']); exit();

        $exc = new PHPExcel_Reader_Excel5();
        $exc->setReadDataOnly(true);
        $nome = 'public/anexo/'.$arq['name'];
        $excPHP = $exc->load($nome);

        //Pega o total de colunas

        $column = $excPHP->setActiveSheetIndex(0)->getHighestColumn();
        $totalColum = PHPExcel_Cell::columnIndexFromString($column);

        //Pega o total de rows

        $linha = $excPHP->setActiveSheetIndex(0)->getHighestRow();


        // navegar nas linhas

        for($i =1; $i <= $linha; $i++){
            echo "<tr>";

            //Navegar nas colunas

            for($j = 0; $j < $totalColum; $j++){
                if($i == 1){
                    echo "<th>".utf8_decode($excPHP->getActiveSheet()->getCellByColumnAndRow($j, $i)->getValue());
                }else{
                    $dados[] = utf8_decode($excPHP->getActiveSheet()->getCellByColumnAndRow($j, $i)->getValue());

                    echo "<th>".utf8_decode($excPHP->getActiveSheet()->getCellByColumnAndRow($j, $i)->getValue());

                }

            }
            echo "</tr>";
        }

        //Nome produto
        $valores = $dados;
        $count = count($valores);
        $x = '';

        for($i = 0 ; $i <= $count; $i++){
            $prod = 5;
            $x = $i * $prod;
            if(!empty($valores[$x])){
                $f[$x]['produto'] = $valores[$x];
            }
        }

        //Marca Produto
        array_shift($valores);
        $count1 = count($valores);

        for($i = 0 ; $i <= $count1; $i++){
            $prod = 5;
            $x = $i * $prod;
            if(!empty($valores[$x])){
                $f[$x]['marca'] = $valores[$x];
            }
        }

        //Descricao produto
        array_shift($valores);
        $count2 = count($valores);

        for($i = 0 ; $i <= $count2; $i++){
            $prod = 5;
            $x = $i * $prod;
            if(!empty($valores[$x])){
                $f[$x]['desc'] = $valores[$x];
            }
        }

        //Valor produto
        array_shift($valores);
        $count3 = count($valores);

        for($i = 0 ; $i <= $count3; $i++){
            $prod = 5;
            $x = $i * $prod;
            if(!empty($valores[$x])){
                $f[$x]['valor'] = $valores[$x];
            }
        }

        //Validade produto
        array_shift($valores);
        $count4 = count($valores);

        for($i = 0 ; $i <= $count4; $i++){
            $prod = 5;
            $x = $i * $prod;
            if(!empty($valores[$x])){
                $f[$x]['validade'] = $valores[$x];
            }
        }

        $valor = count($f);
        $b = array_values($f);

        $prod = new Produto;
        $id_mercado =  $_SESSION['login'];


        if(isset($cadXls) && $cadXls == 'true') {
            echo "<div class='alert alert-success' style='text-align: center'><i class='fa fa-spinner fa-spin' style='font-size:24px'></i>
                      </div>";
           for ($i = 0; $i < $valor; $i++) {
               $prod->setCadastro("{$b[$i]['produto']}", "{$b[$i]['marca']}", "{$b[$i]['desc']}", "{$b[$i]['valor']}", "{$b[$i]['validade']}", $id_mercado);
           }
       }

    }

    public function salvaListaPdf()
    {
        $prod = new Produto;
        $id_mercado =  $_SESSION['login'];
        $prod->salvaListaProduto($id_mercado);
    }

    public function excluirLista()
    {
        $prod = new Produto;
        $id_mercado =  $_SESSION['login'];
        $prod->excluirListaProduto($id_mercado);
    }
}