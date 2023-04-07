<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
?>

<h2>Libros</h2>
</div>
            
           
<div class="row">
<div class="col-sm-1">
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Consulta Libros</h5>
        <p class="card-text">Consulta de Libros disponibles para prestamos</p>
        <a href="http://localhost/castillo_claudia_interfacesv2/Views/pages/IndexLibro.php" class="btn btn-primary">Libros</a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Consulta Autores</h5>
        <p class="card-text">Consulta la lita de autores disponibles</p>
        <a href="http://localhost/castillo_claudia_interfacesv2/Views/pages/IndexAutor.php" class="btn btn-primary">Autores</a>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
<div class="col-sm-1">
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Consulta Ejemplares</h5>
        <p class="card-text">Consulta de ejemplares disponibles para prestamos</p>
        <a href="http://localhost/castillo_claudia_interfacesv2/Views/pages/IndexEjemplar.php" class="btn btn-primary">Ejemplares</a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Consulta Editorial</h5>
        <p class="card-text">Consulta la lita de editoriales disponibles</p>
        <a href="http://localhost/castillo_claudia_interfacesv2/Views/pages/IndexEditorial.php" class="btn btn-primary">Editoriales</a>
      </div>
    </div>
  </div>
</div>


<?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>