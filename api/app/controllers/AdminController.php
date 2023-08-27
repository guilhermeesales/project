<?php 
    namespace app\controllers;
    use app\Router;

    class AdminController extends Controller{ 
        function __construct($view, $model) {
            parent::__construct($view, $model);


        }

        public function index() {
            Router::rota('admin/dashboard', function() {
                $this->view->render('dashboard');

            });

            Router::rota('admin/dashboard/logout', function() {
                session_destroy();
                header("location: /mp-ternos-website/");
            });

        }

        
    }



?>