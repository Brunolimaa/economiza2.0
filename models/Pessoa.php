<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 17:26
 */

class Pessoa extends model
{
    protected $nome;

    public function getNome()
    {
        return $this->nome = " Bruno Lima";
    }
}