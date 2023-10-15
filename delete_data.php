<?php
    $id = $_GET['id'];

    include 'conexion.php';

    $conexion = new Conexion();
    $conexion->db_connect();

    $sql = "DELETE FROM tbl_persona WHERE id_persona = $id";
    $delete = $conexion->statement->prepare($sql);

    $delete->execute();

    header("Location: listado.php");
?>