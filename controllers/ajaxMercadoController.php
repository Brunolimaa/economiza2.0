<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/10/17
 * Time: 01:44
 */

class ajaxMercadoController extends Controller
{

    public function listar()
    {
        $mec = new Mercado();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $dados = $mec->detalheMercado($id);
        $dados = $prod->utf8_converter($dados);


        foreach($dados as $dado){
            echo '<tr>';
                echo '<td>'.$dado['razao_social'].'</td>';
                echo '<td>'.$dado['fone'].'</td>';
                echo '<td>'.$dado['email'].'</td>';
                echo '<td>'.$dado['cnpj'].'</td>';
                echo '<td>'.$dado['usuario'].'</td>';
            if($dado['cadastro'] == null){
                echo '<td>Pendente</td><td><input type="submit" class="btn btn-success" onclick="acaoMercado('.$id.');" value="ativar"/></td>';
            } else {
                echo '<td>Ativo</td><td><input type="submit" class="btn btn-danger" onclick="acaoMercado('.$id.');" value="desativar"/></td>';
            }
            echo '</tr>';

        }
    }

    public function ativar()
    {
        $mec = new Mercado();
        $id = addslashes($_POST['id']);
        $mec->ativaMercado($id);

    }

    public function listaProdMercado()
    {
        $dados = array();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $dados = $prod->getAllProduto($id);


        foreach($dados as $col){

            echo '<tr>';
//            echo "<td class='a-center'>
//            <input type='checkbox' onclick='promocao($col[id_prod])' class='flat' id='selePromocao' name='table_records'>
//          </td>";
            echo '<td>'.utf8_encode($col['nome']).'</td>';
            echo '<td>'.utf8_encode($col['marca']).'</td>';
            echo '<td>'.$col['descricao'].'</td>';
            echo '<td>'.number_format($col['preco'], 2, ',', '.').'</td>';
            echo '<td><img src="public/image/'.$col['foto'].'" style="width: 30px; margin: 0px 15px;"></td>';
            echo '<td>'.$col['validade'].'</td>';
            echo "<td>
             <button type='button' value='$col[id_prod]' class='btn btn-primary'  onclick='edit($col[id_prod])' name='editar' id='editar' ><i class='glyphicon glyphicon-pencil'></i></button>
             <button type='button' value='$col[id_prod]' class='btn btn-danger'  onclick='excluir($col[id_prod])' name='excluir' id='excluir' ><i class='glyphicon glyphicon-trash'></i></button>
          </td>";
            echo '</tr>';
        }
    }

    public function listarApp()
    {
        $dados = array();
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $dados = $prod->getAllProduto($id);

        foreach($dados as $col){

            echo '<tr>';
            echo '<td>'.utf8_encode($col['nome']).'</td>';
            echo '<td>'.utf8_encode($col['marca']).'</td>';
            echo '<td>'.$col['descricao'].'</td>';
            echo '<td>'.$col['preco'].'</td>';
            echo '<td>'.$col['validade'].'</td>';

            echo '</tr>';
        }
    }

    public function salvaListaApp()
    {
        $prod = new Produto();
        $id = addslashes($_POST['id']);
        $prod->salvarAppLista($id);
    }
}