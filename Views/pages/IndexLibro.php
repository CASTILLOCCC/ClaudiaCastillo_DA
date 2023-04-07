<?php
    require_once(dirname(__DIR__)."../layaut/header.php");
    require_once(dirname(__DIR__)."/../Controllers/LibroController.php");
?>
<h2>Página de Libros</h2>

<a href="AgregarLibro.php" class="btn btn-primary">Agregar Libro</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Libro</th>
                <th>Título</th>
                <th>ISBN</th>
                <th>Código Editorial</th>
                <th>Pánginas</th>
                <th>Código Autor</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new LibroController("","","","","","","");
            $data = $info->index();
            foreach($data["libro"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoLibro"]."</th>";
                    echo "<th>".$dato["titulo"]."</th>";
                    echo "<th>".$dato["isbn"]."</th>";
                    echo "<th>".$dato["codigoEditorial"]."</th>";
                    echo "<th>".$dato["paginas"]."</th>";
                    echo "<th>".$dato["codigoAutor"]."</th>";
                    echo "<th><a href='EditarLibro.php?id=".$dato["codigoLibro"]."'>Editar</a></th>";
                    echo "<th><a href='EliminarLibro.php?id=".$dato["codigoLibro"]."'>Borrar</a></th>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>