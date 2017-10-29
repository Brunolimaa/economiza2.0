<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 05/10/17
 * Time: 23:23
 */

class Cadastro extends model
{
    protected $mail;
    protected $razao;
    protected $fone;
    protected $cnpj;
    protected $pass;
    protected $ende;
    protected $numero;
    protected $com;
    protected $bairro;
    protected $cep;
    protected $cidade;
    protected $estado;

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function getMail()
    {
        return $this->mail;
    }

    public function setRazao($razao)
    {
        $this->razao = $razao;
    }
    public function getRazao()
    {
        return $this->razao;
    }

    public function setFone($fone)
    {
        $this->fone = $fone;
    }
    public function getFone()
    {
        return $this->fone;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function setEnd($end)
    {
        $this->ende = $end;
    }
    public function getEnd()
    {
        return $this->ende;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
    public function getNumero()
    {
        return $this->numero;
    }

    public function setCom($com)
    {
        $this->com = $com;
    }
    public function getCom()
    {
        return $this->com;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getBairro()
    {
        return $this->bairro;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function getCep()
    {
        return $this->cep;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function getEstado()
    {
        return $this->estado;
    }

    public function insertRegistro()
    {
        $sql = "INSERT INTO `cad_mercado`(`razao_social`, `fone`, `email`, `cnpj`, `logo`, `usuario`, `senha`) 
                  VALUES (:razao, :fone, :email, :cnpj, :logo, :usuario, :pass)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":razao", $this->getRazao());
        $stmt->bindValue(":fone", $this->getFone());
        $stmt->bindValue(":email", $this->getMail());
        $stmt->bindValue(":cnpj", $this->getCnpj());
        $stmt->bindValue(":logo", $this->getRazao());
        $stmt->bindValue(":usuario", $this->getMail());
        $stmt->bindValue(":pass", $this->getPass());

        if($stmt->execute()){
            $id = $this->db->lastInsertId();
            $sql1 = "INSERT INTO `cad_endereco`(`endereco`, `bairro`, `municipio`, `UF`, `cep`, `latitude`, `longitude`, `id_mercado`)
                        VALUES (:ende,:bairro,:muni,:uf,:cep,:lat,:log,:id)";
            $stmt1 = $this->db->prepare($sql1);
            $stmt1->bindValue(':ende', $this->getEnd());
            $stmt1->bindValue(':bairro', $this->getBairro());
            $stmt1->bindValue(':muni', $this->getCidade());
            $stmt1->bindValue(':uf', $this->getEstado());
            $stmt1->bindValue(':cep', $this->getCep());
            $stmt1->bindValue(':lat', '00000000');
            $stmt1->bindValue(':log', '00000000');
            $stmt1->bindValue(':id', $id);

            if($stmt1->execute()){
                return true;
            }

       }

    }
}