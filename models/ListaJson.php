<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 14/10/17
 * Time: 00:03
 */

class ListaJson extends model
{
    public function listaProduto()
    {
        $qr = "SELECT a.razao_social, a.latitude, a.longitude, a.logo, b.nome, b.marca,b.descricao, b.foto, c.preco
                    FROM cad_mercado a JOIN cad_preco c ON(a.id_mercado = c.id_mercado)
                    JOIN cad_produto b ON(b.id_prod = c.id_prod) WHERE c.lista_app = 1 ORDER BY c.preco ASC";
        $stmt = $this->db->prepare($qr);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listaPromocao()
    {
        $qr = "SELECT a.razao_social,a.logo, b.nome, b.marca, b.foto,b.descricao, c.preco ,c.validade
                    FROM cad_mercado a JOIN cad_preco c ON(a.id_mercado = c.id_mercado)
                    JOIN cad_produto b ON(b.id_prod = c.id_prod) WHERE c.promocao = 1 AND c.lista_app = 1 ORDER BY a.razao_social  ";
        $stmt = $this->db->prepare($qr);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listaEndereco()
    {
        $qr = "SELECT a.razao_social,d.endereco,d.bairro,d.municipio,d.UF,d.latitude, d.longitude
                    FROM cad_mercado a JOIN cad_endereco d ON(d.id_mercado = a.id_mercado)";

        $stmt = $this->db->prepare($qr);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setUtf8(){
        $qr = "SET CHARACTER SET utf8";
        $stmt = $this->db->prepare($qr);
        $stmt->execute();
    }

}