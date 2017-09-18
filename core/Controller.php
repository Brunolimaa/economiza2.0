<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 07/09/17
 * Time: 17:17
 */

class Controller
{

    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require "views/".$viewName.".php";
    }

    public function loadTemplate($viewName, $viewData = array()){
        require "views/template.php";
    }

    public function loadTemplateCadastro($viewName, $viewData = array()){
        require "views/templateCadastro.php";
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require "views/".$viewName.".php";
    }

}