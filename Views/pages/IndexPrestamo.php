<?php
    require_once(dirname(__DIR__)."../layaut/header.php");
    require_once(dirname(__DIR__)."/../Controllers/PrestamoController.php");
?>
<h2>Página de Editoriales</h2>

<a href="PrestamoLibros.php" class="btn btn-primary">Agregar Prestamo</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Prestamo</th>
                <th>Código Usuario</th>
                <th>Código Ejemplar</th>
                <th>Fecha Prestamo</th>
                <th>Fecha Devolución</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new PrestamoController("","","","","","");
            $data = $info->index();
            foreach($data["prestamos"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoPrestamol"]."</th>";
                    echo "<th>".$dato["codigoUsuario"]."</th>";
                    echo "<th>".$dato["codigoEjemplar"]."</th>";
                    echo "<th>".$dato["codigoPrestamo"]."</th>";
                    echo "<th>Editar</th>";
                    echo "<th><a href='EliminarPrestamo.php?id=".$dato["codigoPrestamo"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>