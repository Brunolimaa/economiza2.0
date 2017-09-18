<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08/09/17
 * Time: 23:59
 */

class loginController extends Controller
{
    public function index()
    {
        $data = array();
        $this->loadTemplateCadastro('login', $data);
    }
}