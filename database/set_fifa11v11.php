<?php 

$inc = include("conection.php");


if ($inc) {
    $consulta = "SELECT * FROM fifa11v11";
    $resultado = mysqli_query($db,$consulta);
    if ($resultado) {

        while($row = $resultado->fetch_array()){

            
            $nombre = $row['nombre'];
            $rut = $row['rut'];
            $genero = $row['genero'];
            $nacimiento = $row['nacimiento'];
            $comuna = $row['comuna'];
            $email = $row['email'];
            $telefono = $row['telefono'];
            $discord = $row['discord'];
            $equipo = $row['equipo'];
            ?>

        
               

                
                    <tbody>
                                        <tr>
                                            <td><?php echo $nombre ?></td>
                                            <td><?php echo $rut ?></td>
                                            <td><?php echo $genero ?></td>
                                            <td><?php echo $nacimiento ?></td>
                                            <td><?php echo $comuna ?></td>
                                            <td><?php echo $email ?></td>
                                            <td><?php echo $telefono ?></td>
                                            <td><?php echo $discord ?></td>
                                            <td><?php echo $equipo ?></td>
                                            
                                        </tr>
                                    </tbody>



            <?php

        }

    }
}

?>