<?php

include_once 'bd.php';

class Paciente extends BD {
    private $nombre; 
    private $usuario;

    public function existePaciente ($usuario, $contrasena) {
        $consulta = $this->conectar()->prepare('SELECT * FROM paciente WHERE usuario = :usuario AND contrasena = :contrasena');
        $consulta->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);  
        if($consulta->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setPaciente ($usuario) {
        $consulta = $this->conectar()->prepare('SELECT * FROM paciente WHERE usuario = :usuario');
        $consulta->execute(['usuario' => $usuario]);  

        foreach ($consulta as $fila) {
            $this->nombre = $fila['nombre'];
            $this->usuario = $fila['usuario'];
        }
    }

    public function getNombre () {
        return $this->nombre;
    }
}

?>