<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
require_once(dirname(__DIR__)."/../Controllers/LibroController.php");
?>

<form name="AgregarEjemplar" method="POST" action="../../Controllers/IndexController.php">
        <div class="row">
            <div id = "azul" class="col-12">
             
                </div>

            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                      <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Ejemplares</legend>
                                    <div class="form-group">
                                      <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoEjemplar" name="codigoEjemplar" type="text" placeholder="Código Ejemplar" class="form-control text-center" >
                                    </div>
                                        <div class="col-md-12  text-center">
                                        
                                            <input id="localizacion" name="localizacion" type="text" placeholder="Nombre Localizacion" class="form-control text-center" >
                                            <input type="hidden" name="controller" value="editorial">
                                        </div>
                                        <div class="col-md-12  text-center">
                                            Libro
                                        <?php
                                        $info = new LibroController("","","","","","","");
                                        $data = $info->index();
                                        echo "<select name='codigoLibro'>";
                                        foreach($data["libro"] as $dato){
                                        echo "<option value='".$dato["codigoLibro"]."'>".$dato["titulo"]."</option>";
                                        };
                                    ?>
                                        <!-- <input id="codigoLibro" name="codigoLibro" type="text" placeholder="Código del Libro" class="form-control text-center" > -->
                                        <input type="hidden" name="controller" value="ejemplar">
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
    

