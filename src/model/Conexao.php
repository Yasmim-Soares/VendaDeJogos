<?php
namespace App\Model;

use PDO;
use PDOException;
class Conexao{
    private const HOST = 'localhost';
    private const DB_NAME = 'lojajogos';
    private const USER = 'root';
    private const PASS = '';

    private static $pdo = null;

    private function __construct(){
    }

    public static function getConexao(){
        if(self::$pdo === null){
            try{
                $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME . ';charset=utf8';

                self::$pdo = new PDO($dsn, self::USER, self::PASS);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                die("Erro de conexão com o banco: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
?>