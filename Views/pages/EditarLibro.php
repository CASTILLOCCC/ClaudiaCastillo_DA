<?php 
require_once(dirname(__DIR__)."../layaut/header.php");
require_once(dirname(__DIR__)."/../Controllers/EditorialController.php");
require_once(dirname(__DIR__)."/../Controllers/AutorController.php");
?>
<form name="AgregarLibro" method="POST" action="../../Controllers/IndexController.php">
        <div class="row">
            <div id = "azul" class="col-12">
             
                </div>

            <div id="azul" class="col-12">
            </div>
                <div class="row ">
                      <div class="azul1 col-12">
                                    <legend class="text-center header">Registro de Libros</legend>
                                    <div class="form-group">
                                      <div class="col-md-12  text-center">
                                        
                                        <input id="CodigoLibro" name="codigoLibro" type="text" value="<?php echo $_GET['id'] ?>" readonly class="form-control text-center" >
                                    </div>
                                        <div class="col-md-12  text-center">
                                        
                                            <input id="titulo" name="titulo" type="text" placeholder="Título del Libro" class="form-control text-center" >
                                            <input type="hidden" name="controller" value="updatelibro">
                                        </div>
                                        <div class="col-md-12  text-center">
                                            Autor
                                    <?php
                                        $info = new AutorController("","","");
                                        $data = $info->index();
                                        echo "<select name='codigoAutor'>";
                                        foreach($data["autor"] as $dato){
                                        echo "<option value='".$dato["codigoAutor"]."'>".$dato["nombreAutor"]."</option>";
                                        };
                                    ?>
                                    </div>
                                        <div class="col-md-12  text-center">
                                        
                                        <input id="isbn" name="isbn" type="text" placeholder="ISBN" class="form-control text-center" >
                                    </div>
                                    <div class="col-md-12  text-center">
                                        Editorial
                                    <?php
                                        $info = new EditorialController("","","");
                                        $data = $info->index();
                                        echo "<select name='codigoEditorial'>";
                                        foreach($data["editoriales"] as $dato){
                                        echo "<option value='".$dato["codigoEditorial"]."'>".$dato["nombreEditorial"]."</option>";
                                        };
                                    ?>
                                        <!-- <input id="codigoEditorial" name="codigoEditorial" type="text" placeholder="Código Editorial" class="form-control text-center" > -->
                                    </div>
                                    <div class="col-md-12  text-center">
                                        
                                        <input id="paginas" name="paginas" type="text" placeholder="paginas" class="form-control text-center" >
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
    

