<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 17:26
 */

class Usuario extends model
{
    protected $user;
    protected $pass;

    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function login()
    {
        $sql = "SELECT * FROM cad_mercado WHERE usuario = ? AND senha = ? AND cadastro IS NOT NULL";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $this->getUser());
        $stmt->bindValue(2, $this->getPass());
        $stmt->execute();
        $dados = $stmt->fetch();

        if($stmt->rowCount() > 0){
            $_SESSION['login'] = $dados['id_mercado'];
            $_SESSION['razao_social'] = $dados['razao_social'];
            return $dados;
        }

    }
}