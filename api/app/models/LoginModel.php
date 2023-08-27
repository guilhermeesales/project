<?php 
    namespace app\models;
    use app\ConectarBaseDeDados;

    include("app/connection.php");

    // include "app/connection.php";
    class LoginModel extends Model { 
        public static function pegarUsuarios() {
            $database = ConectarBaseDeDados::connect()->prepare("SELECT * FROM usuario");
            $database->execute();
            return $database->fetchAll();

        }
        
    }

?>