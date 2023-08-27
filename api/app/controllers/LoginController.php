<?php 
    namespace app\controllers;
    use \app\Router;

    class LoginController extends Controller { 
        function __construct($view, $model) {
            parent::__construct($view, $model);


        }

        public function index() {
            Router::rota("login", function() {
                $this->view->render("login");

            }); 

            Router::rota("/login/sucess", function() {
                $this->view->render("home");

            });


            Router::rota("login/entrar", function() {
                if(isset($_POST['email']) && isset($_POST['senha'])) {
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                }


                $uri = $_SERVER['REQUEST_URI'];
                $uri = explode("/", $uri)[1];

                $usuarios = \app\models\LoginModel::pegarUsuarios();

                foreach($usuarios as $chave => $valor) {
                    if($email == $valor['email'] && password_verify($senha, $valor['senha'])){
                        $_SESSION['logado'] = True;
                        $_SESSION['nivel_acesso'] = $valor['nivel_acesso'];
                        header("location: /{$uri}/admin/dashboard");
                        exit;

                    }
                    
                }

                $_SESSION['logado'] = False;
                header("location: /{$uri}/login");
        
            });


        }   
    }



?>