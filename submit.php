<?php

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
    $sql = "INSERT INTO tbl_persona(nombre_curso,fecha_registro,apellidos,nombres,fecha_nacimiento,edad,genero,tipo_de_documento,documento,lugar_expedicion,estado_civil,desplazado,desvinculado,madre_soltera,hijos,numero_hijos,direccion,estrato,telefono_fijo,telefono_celular,e_mail,regimen,cotizante,sisben,puntaje_sisben,grupo_sanguineo,nombre_familiar,numero_familiar,enfermedad,nombre_enfermedad,discapacidad,nombre_discapacidad) VALUES ('$nombrecurso', '$fechaform', '$apellidos', '$nombres', '$fechanac', '$edad', '$genero', '$tipo_de_documento', '$documento', '$lugarexpedicion', '$estadocivil', '$desplazado', '$desvinculado', '$madresoltera', '$hijos', '$cuantoshijos', '$direccion', '$estrato', '$fijo', '$celular', '$email', '$regimen', '$cotizante', '$sisben', '$puntaje', '$rh', '$nombreemergencia', '$telemergencia', '$enfermedad', '$cualenfermedad', '$discapacidad', '$cualdiscapacidad')";

    $insert = $conexion->statement->prepare($sql);
    $insert->execute();

    echo "Your Info was successfully submited, we'll get in touch with you soon";
?>