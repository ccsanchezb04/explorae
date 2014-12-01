<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Agregar decoracion</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <?php foreach ($decoUpd as $key): ?> 
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre Decoración:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_decoracion" id="nombres" value="<?php echo $key->nombre_decoracion; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio de decoracíon:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_decoracion" id="apellidos" value="<?php echo $key->precio_decoracion; ?>">
                </div>                
            </div>  
            <div class="form-group">
                <label for="categoria" class="col-sm-4 control-label">Categoria Decoración</label>
                <div class="col-sm-6">
                   <select name="categoria_decoracion" id="categoria_decoracion" class="form-control">
                       <option value="">Seleccione...</option>
                       <option value="1"<?php if ($key->categoria_decoracion == "1") echo "selected=''selected"; ?>>1</option>
                       <option value="2"<?php if ($key->categoria_decoracion == "2") echo "selected=''selected"; ?>>2</option>
                       <option value="3"<?php if ($key->categoria_decoracion == "3") echo "selected=''selected"; ?>>3</option>
                   </select>
                </div> 
            </div>          
            <div class="form-group">
                <label for="identificacion" class="col-sm-4 control-label">Contacto decoración</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="contacto_decoracion" id="identificacion" value="<?php echo $key->contacto_decoracion; ?>">
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Telefono de contacto</label>
                <div class="col-sm-6">
                    <input type="text" name="tel_contacto" class="form-control" id="email" value="<?php echo $key->telefono_contacto; ?>">
                </div> 
            </div>   
            <div class="form-group">
                <label for="movil" class="col-sm-4 control-label">Correo de contacto:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email_contacto" id="movil" value="<?php echo $key->email_contacto; ?>">
                </div>                     
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen de decoración:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
                            <img src="<?php echo base_url(); ?>public/images/page/decoraciones/<?php echo $key->imagen_decoracion; ?>" alt="">
                        </div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_decoracion" accept="image/png image/jpg">
                                <input type="hidden" name="ioriginal" value="<?php echo $key->imagen_decoracion; ?>">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="<?php echo $key->id_decoracion; ?>">
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Galeria de producto:</label>
                <div class="col-sm-6">
                    <input type="file" name="galeria" multiple="multiple" id="galeria" value="Seleccione Imagenes">
                </div>
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