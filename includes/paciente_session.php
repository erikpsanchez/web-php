<?php

    class SesionPaciente {
        public function __construct() {
            session_start();
        }

        public function setPacienteActual ($usuario) {
            $_SESSION['paciente'] = $usuario;
        }
    
        public function getPacienteActual () {
            return $_SESSION['paciente'];
        }

        public function cerrarSesion () {
            session_unset(); // Destruye todas las variables de sesión
            session_destroy(); // Destruye la sesión
        }
    }

?>