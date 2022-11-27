<?php

include_once 'includes/paciente.php';
include_once 'includes/paciente_session.php';

$sesionPaciente = new SesionPaciente();
$paciente = new Paciente();

if(isset($_SESSION['paciente'])) {
    $paciente->setPaciente($sesionPaciente->getPacienteActual());
    include_once 'vistas/home.php';
}else if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $paciente = new Paciente();
    if($paciente->existePaciente($usuario, $contrasena)) {
        $sesionPaciente->setPacienteActual($usuario);
        $paciente->setPaciente($usuario);
        include_once 'vistas/home.php';
    }else {
        $errorLogin = 'Usuario o contraseña incorrectos';
        include_once 'vistas/paciente.php';
    }
}else {
    include_once 'vistas/paciente.php';
}
?>