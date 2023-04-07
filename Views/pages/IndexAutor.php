<?php
    require_once(dirname(__DIR__)."../layaut/header.php");
    require_once(dirname(__DIR__)."/../Controllers/AutorController.php");
?>
<h2>Página de Autores</h2>

<a href="IngresarAutores.php" class="btn btn-primary">Agregar Autor</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Autor</th>
                <th>Nombre Autor</th>
                <th>Código Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new AutorController("","","");
            $data = $info->index();
            foreach($data["autor"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoAutor"]."</th>";
                    echo "<th>".$dato["nombreAutor"]."</th>";
                    echo "<th>".$dato["codigoEditorial"]."</th>";
                    echo "<th><a href='EditarAutores.php?id=".$dato["codigoAutor"]."'>Editar</a></th>";
                    echo "<th><a href='EliminarAutor.php?id=".$dato["codigoAutor"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>