<?php 
    namespace app\controllers;
    use app\Router;

    class ContatoController extends Controller{ 
        function __construct($view, $model) {
            parent::__construct($view, $model);


        }

        public function index() {
            Router::rota('contato', function() {
                $this->view->render('contato');

            });

        }

        
    }



?>