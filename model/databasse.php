<?php
class database
{
    //utiliza padrao singleton, cujo o objeto é 
    private static $instance = null;
    //Método público  que retorna a conexão com bd
    public static function getConnection()
    {
        if (!self::$instance) {
            $host    = 'localhost';
            $db     = 'sistema_usuarios';
            $user = 'root';
            $password  = '';
            //A conexão usa o driver Mysql (mysql;)e as informaçãoes de host e bd
            self::$instance = new PDO("msql:host=$host;dbname=$db", $user, $password);
            // Define o modo de erro para e
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
