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
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = $id ORDER BY b.data_cadastro DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getProdutoSele($id)
    {

      $sql = "SELECT a.id_prod, a.nome, a.marca,a.descricao, a.foto, b.preco, b.validade  FROM cad_produto a
        INNER JOIN cad_preco b ON a.id_prod = b.id_prod WHERE id_mercado = 1 AND a.id_prod = $id";
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
    public function setCadastro($p,$m,$d,$v = null,$dv = null){
        $sql = "SELECT id_prod FROM cad_produto WHERE nome = '{$p}' AND marca = '{$m}' AND descricao = '{$d}' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $id = $stmt->fetch();
        if($stmt->rowCount()>=1) {
            $id = $id['id_prod'];
            $sql = " INSERT INTO cad_preco(preco, id_mercado, id_prod,validade) VALUES ($v,1,$id,$dv)";

            $stmt = $this->db->prepare($sql);
            //var_dump($stmt);
            $stmt->execute();

        } else {
            $sql = " INSERT INTO cad_produto(nome,marca,descricao,foto) VALUES ('{$p}','{$m}', '{$d}','Naoencontrado.png')";
            $stmt = $this->db->prepare($sql);
            if($stmt->execute()) {
                $id = $this->db->lastInsertId();

                $sql = " INSERT INTO cad_preco(preco, id_mercado, id_prod,validade) VALUES ($v,1,$id,$dv)";
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
     */
    public function update($p, $m, $d, $v, $dv, $id)
    {
        //Criar query para compara update dos produtos
        /* Logica: Se o produto informado com nome e etc existe na base de dados pegar seu id e dar apenas um update
         * Caso nao exista o produto, sera necessario realiar um insert na table cad_produto, pegar seu utimo id inserido
         * e atualizar a table id_preco
         */
    }
}