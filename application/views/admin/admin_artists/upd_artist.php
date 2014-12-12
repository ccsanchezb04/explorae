<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Menú</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
            <?php foreach ($artistUpd as $key): ?>
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre del artista:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_artista" id="nombres" value="<?php echo $key->nombre_artista; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio del contrato:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_contrato" id="apellidos" value="<?php echo $key->precio_contrato; ?>">
                </div>                
            </div>  
            <div class="form-group">
                <label for="categoria" class="col-sm-4 control-label">Categoria del artista</label>
                <div class="col-sm-6">
                    <select name="categoria_artista" id="categoria_artista" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="1"<?php if($key->categoria_artista == 1) echo 'selected="selected"'; ?>>1</option>
                        <option value="2"<?php if($key->categoria_artista == 2) echo 'selected="selected"'; ?>>2</option>
                        <option value="3"<?php if($key->categoria_artista == 3) echo 'selected="selected"'; ?>>3</option>
                    </select>
                </div> 
            </div> 
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Nombre del contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_contacto" id="apellidos" value="<?php echo $key->nombre_contacto; ?>">
                </div>                
            </div>         
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Telefono del contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="tel_contacto" id="apellidos" value="<?php echo $key->telefono_contacto; ?>">
                </div>                
            </div>
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Correo de contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email_contacto" id="apellidos" value="<?php echo $key->email_contacto; ?>">
                </div>                
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Lista de canciones</label>
                <div class="col-sm-6">
                    <textarea name="lista_canciones" class="form-control" cols="30" rows="5"><?php echo $key->lista_canciones; ?></textarea>
                </div>                
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Tipo de artista</label>
                <div class="col-sm-6">
                    <select name="tipo_artista" id="categoria_artista" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="solista"<?php if($key->tipo_artista == "solista") echo 'selected="selected"'; ?>>Solista</option>
                        <option value="grupo"<?php if($key->tipo_artista == "grupo") echo 'selected="selected"'; ?>>Grupo</option>
                    </select>
                </div>                
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen del artista:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
                            <img src="<?php echo base_url(); ?>public/images/page/artistas/<?php echo $key->imagen_artista; ?>" alt="">
                        </div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_artista" accept="image/png image/jpg">
                                <input type="hidden" name="ioriginal" value="<?php echo $key->imagen_artista; ?>">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="<?php echo $key->id_artista; ?>">
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