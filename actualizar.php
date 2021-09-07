<?php 
    include("conexion1.php");
    $con=conectar();

$id_est=$_GET['id_est'];

$sql="SELECT * FROM estudiantes WHERE id_est='$id_est'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
         <body>
        <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="update1.php" method="POST">

        <input type="hidden" name="id_est" value="<?php echo $row['id_est']  ?>">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select  type="text" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php  echo $row['tipo_doc']  ?>">
        <option value="<?php echo $row['tipo_doc'] ?>"> Selecione un opción  </option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_est">NOMBRES</label>
    <input type="text" class="form-control mb-3" name="nom_est" id="nom_est"  value="<?php echo $row['nom_est']  ?>">
<label for="ape_est">APELLIDOS</label>
    <input type="text" class="form-control mb-3" name="ape_est" id="ape_est" value="<?php echo $row['ape_est']  ?>">
<label for="ed_est">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_est" id="ed_est" value="<?php echo $row['ed_est']  ?>">
<label for="fecnac_est">FECHA DE NACIMIENTO</label>    
    <input type="date" class="form-control mb-3" name="fecnac_est" id="fecnac_est" value="<?php echo $row['fecnac_est']  ?>">

<label for="gen_est">GENERO</label>    
    <select type="text" class="form-control mb-3" name="gen_est"  value="<?php echo $row['gen_est']  ?>">
        <option value="<?php echo $row['gen_est'] ?>">Seleccione una opción</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

<label for="dir_est">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_est" id="dir_est" value="<?php echo $row['dir_est']  ?>">
<label for="tel_est">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_est" id="tel_est" value="<?php echo $row['tel_est']  ?>">
<label for="em_est">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_est" id="em_est" value="<?php echo $row['em_est']  ?>">

<label for="id_pais">PAIS</label>    
    <select type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']  ?>">
        <option value="<?php echo $row['id_pais']  ?>">Seleccione una opción</option>
        <option value="1">Colombia</option>
        <option value="2">Egipto</option>
        <option value="3">Estados Unidos</option>
    </select>

<label for="id_ciu">CIUDAD</label>    
    <select type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']  ?>">
        <option value="<?php echo $row['id_ciu']  ?>">Seleccione una opción</option>
        <option value="1">Medellin</option>
        <option value="2">Girardot</option>
        <option value="3">Cali</option>
    </select>

<label for="id_curso">CURSO</label>    
    <select type="text" class="form-control mb-3" name="id_curso" id="id_curso" value="<?php echo $row['id_curso']  ?>">
        <option value="<?php echo $row['id_curso']  ?>">Seleccione una opción</option>
        <option value="1">1101</option>
        <option value="2">1102</option>
        <option value="3">1103</option>
        <option value="4">1104</option>
    </select>
                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="estudiantes.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>