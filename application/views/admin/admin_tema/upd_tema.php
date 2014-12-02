<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Temática</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <?php foreach ($decoUpd as $key): ?> 
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre temática:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_tematica" id="nombres" value="<?php echo $key->nombre_tematica; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio de temática:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_tematica" id="apellidos" value="<?php echo $key->precio_tematica; ?>">
                </div>                
            </div>  
            <div class="form-group">
                <label for="categoria" class="col-sm-4 control-label">Categoria temática</label>
                <div class="col-sm-6">
                   <select name="categoria_tematica" id="categoria_tematica" class="form-control">
                       <option value="">Seleccione...</option>
                       <option value="1"<?php if ($key->categoria_tematica == "1") echo "selected=''selected"; ?>>1</option>
                       <option value="2"<?php if ($key->categoria_tematica == "2") echo "selected=''selected"; ?>>2</option>
                       <option value="3"<?php if ($key->categoria_tematica == "3") echo "selected=''selected"; ?>>3</option>
                   </select>
                </div> 
            </div>          
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen de temática:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
                            <img src="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" alt="">
                        </div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_tematica" accept="image/png image/jpg">
                                <input type="hidden" name="ioriginal" value="<?php echo $key->imagen_tematica; ?>">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="<?php echo $key->id_tematica; ?>">
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