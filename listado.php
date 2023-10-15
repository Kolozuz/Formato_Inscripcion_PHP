<?php
include 'conexion.php';
$conexion = new Conexion();
$conexion->db_connect();
$sql = "SELECT * FROM tbl_persona";
$read = $conexion->statement->prepare($sql);
$read->execute();
$personas = $read->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listado Inscritos</title>
</head>
<body>
    <section class="container-fluid text-center">
        <div class="p-10">
            <h2>Listado Interesados Escuela Taller de Bogota</h2>
        </div>
    <table class="table table-striped table-bordered table-hover mt-4">
        <tr>
            <th>ID</th>
            <th>Curso de Interes</th>
            <th>Fecha de Registro</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Tipo de Documento</th>
            <th>Documento</th>
            <th>Expedido en</th>
            <th>Estado Civil</th>
            <th>Desplazado</th>
            <th>Desvinculado</th>
            <th>Madre Soltera</th>
            <th>Hijos</th>
            <th>Numero de Hijos</th>
            <th>Direccion de Residencia</th>
            <th>Estrato</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Correo Electronico</th>
            <th>Regimen</th>
            <th>Cotizante</th>
            <th>Sisben</th>
            <th>Puntaje Sisben</th>
            <th>Grupo Sanguineo</th>
            <th>Familiar</th>
            <th>Contacto del Familiar</th>
            <th>Enfermedad</th>
            <th>Nombre de Enfermedad</th>
            <th>Discapacidad</th>
            <th>Nombre de Discapacidad</th>
        </tr>

<?php   foreach($personas as $a){?>
        <tr>
            <td><?php echo $a->id_persona;?></td>
            <td><?php echo $a->nombre_curso;?></td>
            <td><?php echo $a->fecha_registro;?></td>
            <td><?php echo $a->apellidos;?></td>
            <td><?php echo $a->nombres;?></td>
            <td><?php echo $a->fecha_nacimiento;?></td>
            <td><?php echo $a->edad;?></td>
            <td><?php echo $a->genero;?></td>
            <td><?php echo $a->tipo_de_documento;?></td>
            <td><?php echo $a->documento;?></td>
            <td><?php echo $a->lugar_expedicion;?></td>
            <td><?php echo $a->estado_civil;?></td>
            <td><?php echo $a->desplazado;?></td>
            <td><?php echo $a->desvinculado;?></td>
            <td><?php echo $a->madre_soltera?></td>
            <td><?php echo $a->hijos?></td>
            <td><?php echo $a->numero_hijos?></td>
            <td><?php echo $a->direccion?></td>
            <td><?php echo $a->estrato?></td>
            <td><?php echo $a->telefono_fijo?></td>
            <td><?php echo $a->telefono_celular?></td>
            <td><?php echo $a->e_mail?></td>
            <td><?php echo $a->regimen?></td>
            <td><?php echo $a->cotizante?></td>
            <td><?php echo $a->sisben?></td>
            <td><?php echo $a->puntaje_sisben?></td>
            <td><?php echo $a->grupo_sanguineo?></td>
            <td><?php echo $a->nombre_familiar?></td>
            <td><?php echo $a->numero_familiar?></td>
            <td><?php echo $a->enfermedad?></td>
            <td><?php echo $a->nombre_enfermedad?></td>
            <td><?php echo $a->discapacidad	?></td>
            <td><?php echo $a->nombre_discapacidad?></td>

            <td>
                <a href="update_form.php?id=<?php echo $a->id_persona;?>">
                    <button class="btn btn-primary">Update</button>
                </a>
                
                <button onclick="borrar('<?php echo $a->id_persona;?>')" class="btn btn-warning">Delete</button>
                
            </td>
        </tr>
<?php } ?>

    </table>
    </section>

    <script src="libraries/sweetalert.min.js"></script>

    <script>
        let id;
        function borrar(id){
            swal({
            title: "Esta seguro de que desea borrar el registro?",
            text: "Una vez eliminado, no sera posible recuperarlo!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("El registro fue borrado con exito!", {
                icon: "success",
            });
            setTimeout(function () {
                location.href = 'delete_data.php?id=' + id;}, 1500); 
            } else {
                swal("No se borro ningun dato!");
            }
});
        }

    </script>
</body>
</html>

