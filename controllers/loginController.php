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
        $usuario = new Usuario();

        if(isset($_POST['send'])){
            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);

            $usuario->setUser($user);
            $usuario->setPass($pass);


            $log = $usuario->login();
            if($log['cadastro'] == 1){
                echo "<div class='alert alert-success' style='text-align: center'>
                          <strong style='font-size:36px'>Logado </strong> com sucesso!
                           <i class='fa fa-spinner fa-spin' style='font-size:24px'></i>
                      </div>
                      <script> 
                            setTimeout(function () {
                                window.location.href = 'painel'; 
                                //will redirect to your blog page (an ex: blog.html)
                            }, 2000); 
                      </script>";
            } else if($log['cadastro'] == 2){
                echo "<div class='alert alert-success' style='text-align: center'>
                          <strong style='font-size:36px'>Logado </strong> com sucesso!
                           <i class='fa fa-spinner fa-spin' style='font-size:24px'></i>
                      </div><script> 
                            setTimeout(function () {
                                window.location.href = 'admin'; 
                                //will redirect to your blog page (an ex: blog.html)
                            }, 2000); 
                      </script>";
            } else {
                echo '<div class="alert alert-danger" style="text-align: center">
                          <strong><i class="material-icons" style="font-size:36px">Atencao! </i></strong> usuario ou senha incorreto.
                      </div>';
            }
            //echo "Existe".$user." - ".$pass; exit();
        }
        $data = array();
        $this->loadTemplateCadastro('login', $data);
    }

    public function logof()
    {
        $log = addslashes($_POST['log']);

        if($log == true){
            unset($_SESSION['login']);
            session_destroy();
        }
    }
}