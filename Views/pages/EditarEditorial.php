<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
require_once(dirname(__DIR__)."/../Controllers/EditorialController.php");
?>

<form name="AgregarEditorial" method="POST" action="../../Controllers/IndexController.php">
        <div class="row">
            <div id = "azul" class="col-12">
             
                </div>
                <?php
                $info = new EditorialController("","","");
                ?>
            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                      <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Editorial</legend>
                                    <div class="form-group">
                                      <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoAutor" name="CodigoEditorial" type="text"  value="<?php echo $_GET['id'] ?>" readonly class="form-control text-center" >
                                    </div>
                                        <div class="col-md-12  text-center">
                                        
                                            <input id="NombreAutor" name="NombreEditorial" type="text" placeholder="Nombre Editorial" class="form-control text-center" >
                                            <input type="hidden" name="controller" value="updateeditorial">
                                        </div>
                                       
                                      </div>

                                    <br>
                                  </div>
   
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <br>
                                            <button type="submit" name="actualizar" class="btn btn-primary btn-lg" style="font-size: small;">Actualizar</button>
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
    

