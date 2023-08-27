<?php 
    namespace app\views;
    use app\Router;

    class View { 
        const DEFAULT_HEADER = "header.php";
        const DEFAULT_FOOTER = "footer.php";
        

        # Renderizar minha aplicação MVC
        public function render($body, $header=NULL, $footer=NULL) {
            $routes = Router::$routes;
            $uri = $_SERVER['REQUEST_URI'];

            if(!$header && $uri != $routes['dashboard']) {
                include('templates/' . self::DEFAULT_HEADER);

            }

            include("templates/" . $body . ".php");

            if(!$footer && $uri != $routes['dashboard']) {
                include("templates/" . self::DEFAULT_FOOTER);

            }


        }
    
    
    }

?>