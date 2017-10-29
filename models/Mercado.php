<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/10/17
 * Time: 01:22
 */

class Mercado extends model
{

    public function listaMercados()
    {
        $sql = "SELECT * FROM cad_mercado";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listaMercadosAtivo()
    {
        $sql = "SELECT * FROM cad_mercado WHERE cadastro = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function detalheMercado($id)
    {
        $sql = "SELECT * FROM cad_mercado WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ativaMercado($id)
    {
        $sql = "SELECT cadastro FROM cad_mercado WHERE id_mercado = {$id}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $situacao = $stmt->fetch();

        if($situacao['cadastro'] == 1){
            $sql = "UPDATE cad_mercado SET cadastro = null WHERE id_mercado = {$id}";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

        }else{
            $sql = "UPDATE cad_mercado SET cadastro = 1 WHERE id_mercado = {$id}";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
    }

}