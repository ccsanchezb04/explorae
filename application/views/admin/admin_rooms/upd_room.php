<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Salon</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
        <?php foreach ($lstr as $key): ?>
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre Salon:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_salon" id="nombres" value="<?php echo $key->nombre_salon; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio de alquiler:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_alquiler" id="apellidos" value="<?php echo $key->precio_alquiler; ?>">
                </div>                
            </div>            
            <div class="form-group">
                <label for="identificacion" class="col-sm-4 control-label">Direccion de ubicacion:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="direccion_ubicacion" id="identificacion" value="<?php echo $key->direccion_ubicacion; ?>">
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Total de capacidad:</label>
                <div class="col-sm-6">
                    <input type="text" name="total_capacidad" class="form-control" id="email" value="<?php echo $key->total_capacidad; ?>">
                </div> 
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Nombre del contacto | Nombre del encargado:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_contacto" id="password" value="<?php echo $key->nombre_contacto; ?>">
                </div> 
            </div>
            <div class="form-group">
                <label for="fijo" class="col-sm-4 control-label">Telefono de contacto:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_contacto" id="fijo" value="<?php echo $key->telefono_contacto; ?>">
                </div> 
            </div>
            <div class="form-group">
                <label for="movil" class="col-sm-4 control-label">Correo de contacto:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email_contacto" id="movil" value="<?php echo $key->email_contacto; ?>">
                </div>                     
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen del salon:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" alt="">
                        </div>
                        <div>
                          <span class="btn btn-default btn-file">
                            <span class="fileupload-new">Seleccione Imagen</span>
                            <span class="fileupload-exists">Cambiar</span>
                            <input type="file" name="imagen_salon" accept="image/png image/jpg">
                            <input type="hidden" name="ioriginal" value="<?php echo $key->imagen_salon; ?>">
                          </span>
                          <a href="#" class="btn fileupload-exists btn-success" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="<?php echo $key->id_salon; ?>">
            </div>                 
        <?php endforeach ?>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form>
    </div>
</div>