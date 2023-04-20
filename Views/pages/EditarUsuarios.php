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
                                            <?php
                                        $info = new UsuarioController("","","","","");
                                        $data = $info->index();
                                        echo "<select name='codigoUsuario'>";
                                        foreach($data["autor"] as $dato){
                                        echo "<option value='".$dato["codigoUsuario"]."'>".$dato["nombreUsuario"]."</option>";
                                        };
                                    ?>
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
                    </div>
                </div>
            <br>
            <div class="footer-clean">
            <?php 
                require_once(dirname(__DIR__)."../layaut/footer.php");
?>
