<?php   
    namespace app;
    
    class Router {
        const DEFAULT_URI = "/mp-ternos-website";

        public static $routes = [ 
            "home" => self::DEFAULT_URI."/",
            "login" => self::DEFAULT_URI."/login",
            "contato" => self::DEFAULT_URI."/contato",
            "dashboard" => self::DEFAULT_URI."/admin/dashboard"
        ];


        public static function rota($path, $arg) {
            $url = @$_GET['url'];
            if($url == $path) {
                $arg();
                die();
            } 
            $path = explode('/', $path);
            $url = explode('/', $_GET['url']);
            $ok = true;
            $par = [];
            
            if(count($path) == count($url)) {
                foreach($path as $key => $value) {
                    if($value == "?") {
                        $par[$key] = $url[$key];

                    } else if($url[$key] != $value) {
                        $ok = false;
                        break;

                    }

                }

                if($ok) {
                    $arg($par);
                    die();

                }

            }
        }
    }



?>