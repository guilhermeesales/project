<?php
	namespace app;
	
    class ConectarBaseDeDados {
        private static $pdo;

        public static function connect(){
			if(self::$pdo == null){
				try{
				self::$pdo = new \PDO('mysql:host=localhost;dbname=mp_ternos', 'root', '');
			    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
				}catch(\Exception $e){
					echo 'Erro ao conectar';
				}
			}

			return self::$pdo;
		}


    }



?>