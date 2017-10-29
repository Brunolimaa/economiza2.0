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

    public function registro()
    {

        $cad = new Cadastro();

        $email = addslashes($_POST['mail']);
        $razao = addslashes($_POST['razao']);
        $fone = addslashes($_POST['telefone']);
        $cnpj = addslashes($_POST['cnpj']);
        $pass = addslashes($_POST['pass']);


        $cad->setMail($email);
        $cad->setRazao($razao);
        $cad->setFone($fone);
        $cad->setCnpj($cnpj);
        $cad->setPass($pass);
        // Endereco

        $end = addslashes($_POST['endereco']);
        $numero = addslashes($_POST['numero']);
        $com = addslashes($_POST['complemento']);
        $bairro = addslashes($_POST['bairro']);
        $cep = addslashes($_POST['cep']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['estado']);

        $cad->setEnd($end);
        $cad->setNumero($numero);
        $cad->setCom($com);
        $cad->setBairro($bairro);
        $cad->setCep($cep);
        $cad->setCidade($cidade);
        $cad->setEstado($estado);


        if($cad->insertRegistro()){
            echo "<div class='alert alert-success' style='text-align: center'>
                      <strong style='font-size:36px'>Cadastrado </strong> com sucesso!
                       <i class='fa fa-spinner fa-spin' style='font-size:24px'></i>
                  </div>";
            header('refresh: 5; url=http://localhost/economiza2.0/login');
        }

    }

}