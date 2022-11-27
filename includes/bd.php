<?php

    class BD {
        private $host;
        private $bd;
        private $usuario;
        private $contrasena;
        private $charset;

        public function __construct() {
            $this->host = 'localhost:3308';
            $this->bd = 'app';
            $this->usuario = 'root';
            $this->contrasena = 'root';
        }

        function conectar () {
            try {
                $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->bd;
                $opciones = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Para que nos muestre los errores
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $pdo = new PDO($conexion, $this->usuario, $this->contrasena, $opciones); // Conexión a la base de datos
                return $pdo;
            } catch (PDOException $e) {
                print_r("Error de conexión: " . $e->getMessage());
            }
        }
    }
?>