<?php

include_once 'paciente_session.php';

$sesionPaciente = new SesionPaciente();
$sesionPaciente->cerrarSesion();

header('Location: ../index.php');
?>