<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Equipo</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <?php foreach ($toolUpd as $key): ?>
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre del equipo:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_equipo" id="nombres" value="<?php echo $key->nombre_equipo; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio del alquiler:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_alquiler" id="apellidos" value="<?php echo $key->precio_alquiler; ?>">
                </div>                
            </div>  
            <div class="form-group">
                <label for="categoria" class="col-sm-4 control-label">Categoria del equipo:</label>
                <div class="col-sm-6">
                    <select name="categoria_equipo" id="categoria" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="1"<?php if($key->categoria_equipo == 1) echo "selected='selected'"; ?>>1</option>
                        <option value="2"<?php if($key->categoria_equipo == 2) echo "selected='selected'"; ?>>2</option>
                        <option value="3"<?php if($key->categoria_equipo == 3) echo "selected='selected'"; ?>>3</option>
                    </select>
                </div> 
            </div> 
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Nombre del contacto:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_contacto" id="apellidos" value="<?php echo $key->nombre_contacto; ?>">
                </div>                
            </div>         
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Telefono del contacto:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_contacto" id="apellidos" value="<?php echo $key->telefono_contacto; ?>">
                </div>                
            </div>
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Correo de contacto:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email_contacto" id="apellidos" value="<?php echo $key->email_contacto; ?>">
                </div>                
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Detalles:</label>
                <div class="col-sm-6">
                    <textarea name="detalles" class="form-control" cols="30" rows="5"><?php echo $key->detalles; ?></textarea>
                </div>                
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen del equipo:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
                            <img src="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" alt="">
                        </div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_equipo" accept="image/png image/jpg">
                                <input type="hidden" name="ioriginal" value="<?php echo $key->imagen_equipo; ?>">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="<?php echo $key->id_equipo; ?>">
            </div>
        <?php endforeach ?>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Modificar</button>
                </div> 
            </div>
        </form>
    </div>
</div>