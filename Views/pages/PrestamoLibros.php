<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
?>
<form name="AgregarPrestamos" method="POST" action="../../Controllers/IndexController.php">
        <br>
        <div class="row">
            <div id = "azul" class="col-12">
             
                </div>

            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                  <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Prestamos</legend>
                                    <div class="form-group">
                                        <div class="col-md-10  text-center">
                                        <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoLibro" name="codigoPrestamo" type="text" placeholder="Código del Prestamo" class="form-control text-center" >
                                    </div>
                                        
                                            <input id="codigoUsuario" name="codigoUsuario" type="text" placeholder="Código Usuario" class="form-control" style >
                                        </div>
                                    </div>
                                    <input type="hidden" name="controller" value="prestamo">

                                  </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-10">
                                            <input id="codigoEjemplar" name="codigoEjemplar" type="text" placeholder="Código Ejemplar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                      <div class="col-md-10">
                                          <input id="fechaPrestamo" name="fechaPrestamo" type="text" placeholder="Fecha Prestamo AAAA/MM/DD" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                      <div class="col-md-10">
                                          <input id="fechaDevulucion" name="fechaPrestamo" type="text" placeholder="Fecha Devolucion AA AA/MM/DD" class="form-control">
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