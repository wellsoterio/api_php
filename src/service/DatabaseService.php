<?php
    class DatabaseService {
        private static $conexao = null;

        private function __construct (){
            self::$conexao = new mysqli("localhost", "root", "", "api_php");
        }

        public static function conectar(){
            if (!self::$conexao) 
                self::$conexao = self::$conexao = new mysqli("localhost", "root", "", "api_php");
            return self::$conexao;
        }
    }
    