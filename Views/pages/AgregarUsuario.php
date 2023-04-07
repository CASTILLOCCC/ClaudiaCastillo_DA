<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
?>
<form name="AgregarUsuario" method="POST" action="../../Controllers/IndexController.php">
        <br>
        <div class="row">
            <div id = "azul" class="col-12">
             
                </div>

            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                  <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Usuarios</legend>
                                    <div class="form-group">
                                        <div class="col-md-10  text-center">
                                        <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoLibro" name="codigoUsuario" type="text" placeholder="Código del Usuario" class="form-control text-center" >
                                    </div>
                                        
                                            <input id="nombreUsuario" name="nombreUsuario" type="text" placeholder="Nombre Usuario" class="form-control" style >
                                        </div>
                                    </div>
                                    <input type="hidden" name="controller" value="usuario">

                                  </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="telefonoUsuario" name="telefonoUsuario" type="text" placeholder="Teléfono Usuario" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                      <div class="col-md-10">
                                          <input id="direccionUsuario" name="direccionUsuario" type="text" placeholder="Dirección Usuario" class="form-control">
                                      </div>
                                  </div>
            
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <br>
                                            <button type="submit" name="guardar" class="btn btn-primary btn-lg">Aceptar</button>
                                        </div>
                                        <br>
                                    </div>
                                <!-- </fieldset>
                            </form> -->
                        <!-- </div> -->
                    </div>
                </div>
            <br>
            <div class="footer-clean">
            <?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>

          </div>
  
      </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>