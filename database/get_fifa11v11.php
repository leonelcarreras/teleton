<?php 

include("conection.php");


if (isset($_POST['register'])){
    if (
        
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['rut']) >= 1 &&
        strlen($_POST['genero']) >= 1 && 
        strlen($_POST['nacimiento']) && 
        strlen($_POST['comuna']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['telefono']) >= 1 && 
        strlen($_POST['discord']) >= 1 && 
        strlen($_POST['equipo']) >= 1 

    ) {
        $nombre = trim($_POST['nombre']);
        $rut = trim($_POST['rut']);
        $genero = trim($_POST['genero']);
        $nacimiento = trim($_POST['nacimiento']);
        $comuna = trim($_POST['comuna']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $discord = trim($_POST['discord']);
        $equipo = trim($_POST['equipo']);
        
        $consulta = "INSERT INTO fifa11v11(nombre,rut,genero,nacimiento,comuna,email,telefono,discord,equipo)  VALUES ('$nombre','$rut','$genero','$nacimiento','$comuna','$email','$telefono','$discord','$equipo')";
        $resultado = mysqli_query($db,$consulta);
        if($resultado) {
            ?> 
            ¡Se inscribió exitosamente!
            <?php
        } else {
            ?>            
            ¡Ups ha ocurrido un error!
            <?php
        }        
    } else{
        ?>        
        Completa los campos por favor       
        <?php     
    }
}

?>