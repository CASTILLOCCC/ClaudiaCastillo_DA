<?php
    require_once(dirname(__DIR__)."../layaut/header.php");
    require_once(dirname(__DIR__)."/../Controllers/EjemplarController.php");
?>
<h2>Página de Ejemplares</h2>

<a href="AgregarEjemplar.php" class="btn btn-primary">Agregar Ejemplar</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Ejemplar</th>
                <th>Localización</th>
                <th>Código Libro</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new EjemplarController("","","","");
            $data = $info->index();
            foreach($data["ejemplar"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoEjemplar"]."</th>";
                    echo "<th>".$dato["localizacion"]."</th>";
                    echo "<th>".$dato["codigoLibro"]."</th>";
                    echo "<th><a href='EditarEjemplar.php?id=".$dato["codigoEjemplar"]."'>Editar</a></th>";
                    echo "<th><a href='EliminarEjemplar.php?id=".$dato["codigoEjemplar"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>