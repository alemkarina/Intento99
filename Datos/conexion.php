<?php
/**
 * conexion a la base de datos return PDO
 */
class conexion {
    public static function conectar()
    {
        try {
            $cn = new PDO("mysql:host=localhost;dbname=loguin-php","fullstack","fullstack");

            return $cn;
        } catch (PDOException $ex){
            die($ex->getMessage());
        }
    }
}