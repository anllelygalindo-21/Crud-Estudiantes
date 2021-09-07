<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM estudiantes";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
 <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:##9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Ingresar datos</h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 
 <form action="insertar1.php" method="POST">

<label for="id_est">ID</label>         
<input type="text" class="form-control mb-3" name="id_est">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>         
<select class="form-control mb-3" name="tipo_doc">
<option value="">Selecciona una opcion</option>
<option value="1">Tajeta de Identidad</option>
<option value="2">Cedula de Ciudadania</option>
<option value="3">Cedula de Extranjeria</option>
                                    </select>

<label for="nom_est">NOMBRES</label>         
<input type="text" class="form-control mb-3" name="nom_est">

<label for="ape_est">APELLIDOS</label>         
<input type="text" class="form-control mb-3" name="ape_est">

<label for="ed_est">EDAD</label>         
<input type="text" class="form-control mb-3" name="ed_est">

<label for="fecnac_est">FECHA DE NACIMIENTO</label>         
<input type="date" class="form-control mb-3" name="fecnac_est">

<label for="gen_est">GENERO</label>         
<select class="form-control mb-3" name="gen_est">
<option value="">Selecciona una opcion</option>
<option value="1">Masculino</option>
<option value="2">Femenino</option>
</select>

<label for="dir_est">DIRECCION</label>         
<input type="text" class="form-control mb-3" name="dir_est">

<label for="tel_doc">TELEFONO</label>         
<input type="text" class="form-control mb-3" name="tel_est">

<label for="em_est">Email</label>         
<input type="email" class="form-control mb-3" name="em_est">

<label for="id_pais">PAIS</label>         
<select class="form-control mb-3" name="id_pais">
<option value="">Selecciona una opcion</option>
<option value="1">Colombia</option>
<option value="2">Egipto</option>
<option value="3">Estados Unidos</option>
</select>

<label for="id_ciu">CIUDAD</label>         
<select class="form-control mb-3" name="id_ciu">
    <option value="">Ciudad</option>
    <option value="1">Medellin</option>
    <option value="2">Girardot</option>
    <option value="3">Cali</option>
    </select>

<label for="id_curso">CURSO</label>         
<select class="form-control mb-3" name="id_curso">
<option value="">Selecciona una opcion</option>
<option value="1">1101</option>
<option value="2">1102</option>
<option value="3">1103</option>
<option value="2">1104</option>
               </select>
                                    
<b><input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Ingresar></b>
                                </form>

<th><label for="busqueda"></label><br><a href="estudiantes.php" class="btn btn-info">VOLVER</a></th>
                        </div>
