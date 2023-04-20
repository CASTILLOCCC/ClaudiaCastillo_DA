<?php
    require_once(dirname(__DIR__)."../layaut/header.php");
    require_once(dirname(__DIR__)."/../Controllers/UsuarioController.php");
?>
<h2>Página de Usuarios</h2>

<a href="AgregarUsuario.php" class="btn btn-primary">Agregar Usuario</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Usuario</th>
                <th>Nombre Usuario</th>
                <th>Teléfono Usuario</th>
                <th>Dirección Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new UsuarioController("","","","","");
            $data = $info->index();
            foreach($data["usuarios"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoUsuario"]."</th>";
                    echo "<th>".$dato["nombreUsuario"]."</th>";
                    echo "<th>".$dato["telefonoUsuario"]."</th>";
                    echo "<th>".$dato["direccionUsuario"]."</th>";
                    echo "<th><a href='EditarUsuario.php?id=".$dato["codigoUsuario"]."'>Editar</a></th>";
                    echo "<th><a href='EliminarUsuario.php?id=".$dato["codigoUsuario"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>