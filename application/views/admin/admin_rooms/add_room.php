<div class="container">
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Agregar Usuario</h3>
        </div>
        <form class="form-horizontal" role="form"method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre Salon:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_salon" id="nombres">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio de alquiler:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_alquiler" id="apellidos">
                </div>                
            </div>            
            <div class="form-group">
                <label for="identificacion" class="col-sm-4 control-label">Direccion de ubicacion:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dereccion_ubicacion" id="identificacion">
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Total de capacidad:</label>
                <div class="col-sm-6">
                    <input type="text" name="total_capacidad" class="form-control" id="email">
                </div> 
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Nombre del contacto | Nombre del encargado:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_contacto" id="password">
                </div> 
            </div>
            <div class="form-group">
                <label for="fijo" class="col-sm-4 control-label">Telefono de contacto:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_contacto" id="fijo">
                </div> 
            </div>
            <div class="form-group">
                <label for="movil" class="col-sm-4 control-label">Correo de contacto:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email_contacto" id="movil">
                </div>                     
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen del salon:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen" accept="image/png image/jpg">
                            </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="default">
                <input type="hidden" name="estado" value="Activo">
                <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form>
    </div>
</div>