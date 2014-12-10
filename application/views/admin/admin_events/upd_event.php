<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Evento</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <?php foreach ($eventUpd as $key): ?>
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre del Evento:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_evento" id="nombres" value="<?php echo $key->nombre_evento; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-sm-4 control-label">Descripción:</label>
                <div class="col-sm-6">
                    <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10"><?php echo $key->descripcion; ?></textarea>
                </div>                
            </div>  
            <div class="form-group">
                <label for="tipo_evento" class="col-sm-4 control-label">Tipo de evento:</label>
                <div class="col-sm-6">
                   <select name="tipo_evento" id="tipo_evento" class="form-control">
                       <option value="">Seleccione...</option>
                       <option value="social"<?php if ($tipo_evento == "social") echo "selected='selected'"; ?>>Evento Social</option>
                       <option value="empresarial"<?php if ($tipo_evento == "empresarial") echo "selected='selected'"; ?>>Evento Empresarial</option>
                   </select>
                </div> 
            </div> 
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen de menú:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;">
                            <?php 
                                if ($tipo_evento == "social") 
                                {
                                    echo "<img class='img-responsive' src='".base_url()."public/images/page/eventos_sociales/".$key->imagen_social."'>";
                                } 
                                else 
                                {
                                    echo "<img class='img-responsive' src='".base_url()."public/images/page/eventos_empresariales/".$key->imagen_empresarial."'>";
                                }
                            ?>
                        </div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>                               
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_evento" accept="image/png image/jpg">
                            <?php 
                                if ($tipo_evento == "social") 
                                {
                                    echo "<input type='hidden' name='ioriginal' value='".$key->imagen_social."'>";
                                } 
                                else 
                                {
                                    echo "<input type='hidden' name='ioriginal' value='".$key->imagen_empresarial."'>";
                                }
                            ?>
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <?php 
                    if ($tipo_evento == "social") 
                    {
                        echo "<input type='hidden' name='id' id='sociales' value='".$key->id_sociales."'>";
                    }
                    else
                    {
                        echo "<input type='hidden' name='id' id='empresariales' value='".$key->id_empresariales."'>";
                    }
                ?>
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