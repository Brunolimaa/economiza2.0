<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 09/09/17
 * Time: 00:17
 */

class Produto extends model
{
    public function getProduto($id)
    {
        //var_dump($this->db); exit();
        $sql = "SELECT a.id_prod, a.nome, a.marca,a.descricao, a.foto, b.preco, b.validade  FROM cad_produto a
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = $id AND promocao != 1 ORDER BY b.data_cadastro DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


    public function getAllProduto($id)
    {
        //var_dump($this->db); exit();
        $sql = "SELECT a.id_prod, a.nome, a.marca,a.descricao, a.foto, b.preco, b.validade, b.lista_cadastrada  FROM cad_produto a
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = $id ORDER BY b.data_cadastro DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getProdutoSele($id_mercado, $id)
    {

      $sql = "SELECT a.id_prod, a.nome, a.marca,a.descricao, a.foto, b.preco, b.validade  FROM cad_produto a
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = $id_mercado AND a.id_prod = $id";
      $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();

    }
    /*
     * $p = Produto
     * $m = Marca
     * $d = Descricao
     * $v = Valor
     * $dv = Data de Vencimento
     */
    public function setCadastro($p,$m,$d,$v = null,$dv = null, $id_mercado){
        $sql = "SELECT id_prod FROM cad_produto WHERE nome = '{$p}' AND marca = '{$m}' AND descricao = '{$d}' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $id = $stmt->fetch();
        if($stmt->rowCount()>=1) {
            $id = $id['id_prod'];
            $sql = " INSERT INTO cad_preco(preco, id_mercado, id_prod,validade) VALUES ($v,$id_mercado,$id,'{$dv}')";

            $stmt = $this->db->prepare($sql);
            //var_dump($sql); exit();

            //var_dump($stmt);
            $stmt->execute();

        } else {
            $sql = " INSERT INTO cad_produto(nome,marca,descricao,foto) VALUES ('{$p}','{$m}', '{$d}','Naoencontrado.png')";
            $stmt = $this->db->prepare($sql);
            if($stmt->execute()) {
                $id = $this->db->lastInsertId();

                $sql = " INSERT INTO cad_preco(preco, id_mercado, id_prod,validade) VALUES ($v,$id_mercado,$id,$dv)";
                //var_dump($sql);
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }
        }
    }

    public function excluirProduto($idProd, $idMercado)
    {
        $sql = "DELETE FROM cad_preco WHERE id_prod = $idProd AND id_mercado = $idMercado";
        //var_dump($sql);
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }
    /*
     * $p = Produto
     * $m = Marca
     * $d = Descricao
     * $v = Valor
     * $dv = Data de Vencimento
     * $id_mercado
     */
    public function update($p, $m, $d, $v, $dv, $id, $id_mercado)
    {
        //Criar query para compara update dos produtos
        /* Logica: Se o produto informado com nome e etc existe na base de dados pegar seu id e dar apenas um update
         * Caso nao exista o produto, sera necessario realiar um insert na table cad_produto, pegar seu utimo id inserido
         * e atualizar a table id_preco
         */
//        $sql = "SELECT id_prod FROM cad_preco WHERE id_prod = {$id} AND id_mercado != $id_mercado";
//        $stmt = $this->db->prepare($sql);
//        $stmt->execute();
//        $id_prod = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        if($stmt->rowCount() < 1){
//            $sql = "UPDATE cad_produto SET nome = '{$p}', marca = '{$m}', descricao = '{$d}'  WHERE id_prod = {$id}";
//            $stmt = $this->db->prepare($sql);
//            if($stmt->execute()){
//                return true;
//            }
//        } else {}


        $sql = "SELECT id_prod FROM cad_produto WHERE nome = '{$p}' AND marca = '{$m}' AND descricao = '{$d}' AND id_prod != {$id}";
        //var_dump($sql); exit();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $id_prod = $stmt->fetch();
        if($stmt->rowCount() >=1){
            $id_prod = $id_prod['id_prod'];

            $sql = "UPDATE cad_preco SET preco = {$v}, id_prod = {$id_prod}, validade = '{$dv}' 
                    WHERE id_prod = {$id} AND id_mercado = {$id_mercado}";
            //var_dump($sql);
            $stmt = $this->db->prepare($sql);
            if($stmt->execute()){
                return true;
            }
        } else {
            $sql = "INSERT INTO cad_produto(nome, marca, descricao, foto) VALUES('{$p}','{$m}','{$d}','Naoencontrado.png')";
            $stmt = $this->db->prepare($sql);
            if($stmt->execute()) {
                $id_prod = $this->db->lastInsertId();

                $sql = "UPDATE cad_preco SET preco = {$v}, id_prod = {$id_prod}, validade = '{$dv}' 
                    WHERE id_prod = {$id} AND id_mercado = {$id_mercado}";
                $stmt = $this->db->prepare($sql);
                if($stmt->execute()){
                    return true;
                }
            }
        }

    }

    public function selePromocao($id_prod, $id_mercado)
    {
        $sql = "UPDATE cad_preco SET promocao = 1 WHERE id_prod = {$id_prod} AND id_mercado = {$id_mercado}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function showPromocao($id_mercado){
        $sql = "SELECT a.id_prod, a.nome, a.marca,a.descricao, a.foto, b.preco, b.validade  FROM cad_produto a
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = $id_mercado AND promocao = 1 ORDER BY b.data_cadastro DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function removePromo($id, $id_mercado){
        $sql = "UPDATE cad_preco SET promocao = 0
                    WHERE id_prod = {$id} AND id_mercado = {$id_mercado}";
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            return true;
        }
    }

    public function autoload($prod)
    {

        $sql = "SELECT *  FROM cad_produto a WHERE nome LIKE '%$prod%' LIMIT 5 ";
        //var_dump($sql); exit();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function seleautoload($id)
    {
        $sql = "SELECT *  FROM cad_produto a WHERE id_prod = {$id} ";
        //var_dump($sql); exit();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function salvaListaProduto($id)
    {
        $sql = "UPDATE cad_preco SET lista_cadastrada = 1 WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            return true;
        }
    }

    public function excluirListaProduto($id, $dataExcl = null)
    {
        $dataExcl = date('d-m-Y H:m:s');
        $sql = "INSERT INTO lixeira (preco, id_mercado, id_prod, validade, promocao, data_delete) SELECT preco, id_mercado, id_prod, validade, promocao, '{$dataExcl}' FROM cad_preco WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            $sql = "DELETE FROM cad_preco WHERE id_mercado = {$id}";
            //$sql = "UPDATE cad_preco SET lista_cadastrada = 0 WHERE id_mercado = {$id}";
            $stmt = $this->db->prepare($sql);
            if($stmt->execute()){
                return true;
            }
        }
        //$stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function dataListaExcluida($id)
    {
        $sql = "SELECT data_delete FROM lixeira WHERE id_mercado = {$id} GROUP BY data_delete";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function recuperarLista($data, $id)
    {
        //$sql = "SELECT * FROM lixeira WHERE data_delete = '{$data}' AND id_mercado = {$id}";
        $sql = "SELECT a.nome, a.marca, a.descricao, b.preco, b.validade FROM lixeira b
                INNER JOIN cad_produto a ON b.id_prod = a.id_prod WHERE b.data_delete = '{$data}' AND b.id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function utilizarListaRecuperada($id, $data)
    {
        $sql = "DELETE FROM cad_preco WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        if($stmt->execute()){
            $sql = "INSERT INTO cad_preco(preco, id_mercado, id_prod, validade, promocao) SELECT preco, id_mercado, id_prod, validade, promocao FROM lixeira WHERE id_mercado = {$id} AND data_delete = '{$data}'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
    }

    public function verificaStatus()
    {
        $sql = "SELECT a.id_mercado, a.lista_cadastrada, a.lista_app, b.razao_social FROM cad_preco a
                  INNER JOIN cad_mercado b ON a.id_mercado = b.id_mercado WHERE a.lista_cadastrada = 1 AND a.lista_app = 0 GROUP BY b.razao_social ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function salvarAppLista($id)
    {
        $sql = "UPDATE cad_preco SET lista_app = 1 WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function utf8_converter($array) {

        array_walk_recursive($array, function(&$item, $key){
            if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
            }
        });

        return $array;
    }

    public function excluirListaApp()
    {
        $data = date('d-m-Y');
        $sql = "SELECT * FROM cad_preco WHERE validade < '{$data}'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}