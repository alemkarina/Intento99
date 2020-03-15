<?php
include 'Datos/conexion.php';
include 'Entidades/usuario.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;
    private static function getConexion()
    { 
        self::$cnx = Conexion::conectar();
    }
    private static function desconectar()
    {
        self::$cnx = null;
    }
    /**
     * Validacion de usuario
     */

    public static function loguin($usuario)
    {
        $query = "SELECT * FROM usuarios where usuario = :usuario and password = :password";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $usu = $usuario->getUsuario();
        $pass = $usuario->getPassword();

        $resultado->bindParam(":usuario",$usu);
        $resultado->bindParam(":password",$pass);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            $gtu = $usuario->getUsuario();
            $gtp = $usuario->getPassword();
            if(($filas["usuario"] == $gtu) && ($filas["password"] == $gtp)){
return true;        
            }
        }
        return false;
    }

    /**
     * Obtener usuario
     */

    public static function getUsuario($usuario)
    {
        $query = "SELECT id,nombre,email,privilegio,fecha_registro, usuario FROM usuarios where usuario = :usuario and password = :password";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $usu = $usuario->getUsuario();
        $pass = $usuario->getPassword();

        $resultado->bindParam(":usuario",$usu);
        $resultado->bindParam(":password",$pass);


        $resultado->execute();

            $filas = $resultado->fetch();

            $usuario = new Usuario();
            $usuario->setId($filas["id"]);
            $usuario->setNombre($filas["nombre"]);
            $usuario->setUsuario($filas["usuario"]);
            $usuario->setEmail($filas["email"]);
            $usuario->setPrivilegio($filas["privilegio"]);
            $usuario->setFecha_registro($filas["fecha_registro"]);

            return $usuario;
    }

        /**
     * Registrar usuario
     */

    public static function registrar($usuario)
    {
        $query = "INSERT INTO usuarios (
            nombre,email,usuario,password,privilegio) VALUES (:nombre,:email,:usuario,:password,:privilegio)";
    
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $getNombre = $usuario->getNombre();
        $getEmail = $usuario->getEmail();
        $getUsuario = $usuario->getUsuario();
        $getPassword = $usuario->getPassword();
        $getPrivilegio = $usuario->getPrivilegio();
        
        $resultado->bindParam(":nombre",$getNombre);
        $resultado->bindParam(":email",$getEmail);
        $resultado->bindParam(":usuario",$getUsuario);
        $resultado->bindParam(":password",$getPassword);
        $resultado->bindParam(":privilegio",$getPrivilegio);

        if ($resultado->execute()){
            return true;
        }
        return false;
    }
}