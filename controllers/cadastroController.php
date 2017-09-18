<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08/09/17
 * Time: 23:50
 */

class cadastroController extends Controller
{
    public function index()
    {
        $data = array();
        $this->loadTemplateCadastro('cadastro',$data);
    }

}