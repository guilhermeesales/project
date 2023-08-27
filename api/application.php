<?php
    class Application {
        const DEFAULT = "Home";

        public function execute() {
            if(isset($_GET['url'])) {
                $url = explode("/", ucfirst($_GET['url']));
                $class = 'app\\controllers\\' . $url[0] . 'Controller';
                
            } else {
                $class = 'app\\controllers\\' . self::DEFAULT . 'Controller';
                $url[0] = SELF::DEFAULT;


            }

            $name_class = explode("\\", $class);
            $name_class = $name_class[count($name_class) - 1];

            $view = 'app\\views\\'. $url[0] . 'View';
            $model = 'app\\models\\' . $url[0] . 'Model';


            $controller = new $class(new $view, new $model);
            $controller->index();

        }
        
    }
    
?>