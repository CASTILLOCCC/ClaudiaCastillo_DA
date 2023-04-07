<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
?>

<form name="" method="POST" action="../../Controllers/IndexController.php">
        <div class="row">
        <div class="col-sm-1">
  </div>
            <div id = "azul" class="col-12">
             
                </div>

            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                      <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Editorial</legend>
                                    <div class="form-group">
                                      <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoAutor" name="CodigoEditorial" type="text" placeholder="Código Editorial" class="form-control text-center" >
                                    </div>
                                        <div class="col-md-12  text-center">
                                        
                                            <input id="NombreAutor" name="NombreEditorial" type="text" placeholder="Nombre Editorial" class="form-control text-center" >
                                            <input type="hidden" name="controller" value="editorial">
                                        </div>
                                       
                                      </div>

                                    <br>
                                  </div>
   
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <br>
                                            <button type="submit" name="guardar" class="btn btn-primary btn-lg" style="font-size: small;">Aceptar</button>
                                        </div>
                                        <br>
                                    </div>
                                <!-- </fieldset>
                            </form> -->
                        </div>
                    </div>
                </div>
            <br>
            <div class="footer-clean">
            </div>
</form>
            <?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>
    

