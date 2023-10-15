<?php
    $id = $_POST['id'];
    $nombrecurso = $_POST['nombrecurso'];
    $fechaform = $_POST['fechaform'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $fechanac = $_POST['fechanac'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $tipo_de_documento = $_POST['tipo_de_documento'];
    $documento = $_POST['documento'];
    $lugarexpedicion = $_POST['lugarexpedicion'];
    $estadocivil = $_POST['estadocivil'];
    $desplazado = $_POST['desplazado1'];
    $desvinculado = $_POST['desplazado2'];
    $madresoltera = $_POST['madresoltera'];
    $hijos = $_POST['hijos'];
    $cuantoshijos = $_POST['cuantoshijos'];
    $direccion = $_POST['direccion'];
    $estrato = $_POST['estrato'];
    $fijo = $_POST['fijo'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $regimen = $_POST['regimen'];
    $cotizante = $_POST['cotizante'];
    $sisben = $_POST['sisben'];
    $puntaje = $_POST['puntaje'];
    $rh = $_POST['rh'];
    $nombreemergencia = $_POST['nombreemergencia'];
    $telemergencia = $_POST['telemergencia'];
    $enfermedad = $_POST['enfermedad'];
    $cualenfermedad = $_POST['cualenfermedad'];
    $discapacidad = $_POST['discapacidad'];
    $cualdiscapacidad = $_POST['cualdiscapacidad'];


    include 'conexion.php';

    $conexion = new Conexion();
    $conexion->db_connect();
    $sql = "UPDATE tbl_persona SET nombre_curso='$nombrecurso', fecha_registro='$fechaform', apellidos='$apellidos', nombres='$nombres', fecha_nacimiento='$fechanac', edad='$edad', genero='$genero', tipo_de_documento='$tipo_de_documento', documento='$documento', lugar_expedicion='$lugarexpedicion', estado_civil='$estadocivil', desplazado='$desplazado', desvinculado='$desvinculado', madre_soltera='$madresoltera', hijos='$hijos', numero_hijos='$cuantoshijos', direccion='$direccion', estrato='$estrato', telefono_fijo='$fijo', telefono_celular='$celular', e_mail='$email', regimen='$regimen', cotizante='$cotizante', sisben='$sisben', puntaje_sisben='$puntaje', grupo_sanguineo='$rh', nombre_familiar='$nombreemergencia', numero_familiar='$telemergencia', enfermedad='$enfermedad', nombre_enfermedad='$cualenfermedad', discapacidad='$discapacidad', nombre_discapacidad='$cualdiscapacidad' WHERE id_persona = $id";

    $insert = $conexion->statement->prepare($sql);
    $insert->execute();

    header("location: listado.php")

?>