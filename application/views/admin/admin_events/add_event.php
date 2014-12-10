<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Agregar Evento</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>Admin/add_event" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre del Evento:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_evento" id="nombres">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-sm-4 control-label">Descripcion:</label>
                <div class="col-sm-6">
                    <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10"></textarea>
                </div>                
            </div>  
            <div class="form-group">
                <label for="tipo_evento" class="col-sm-4 control-label">Tipo de evento:</label>
                <div class="col-sm-6">
                   <select name="tipo_evento" id="tipo_evento" class="form-control">
                       <option value="">Seleccione...</option>
                       <option value="social">Evento Social</option>
                       <option value="empresarial">Evento Empresarial</option>
                   </select>
                </div> 
            </div> 
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen de menú:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_evento" accept="image/png image/jpg">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="default">
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Galeria de producto:</label>
                <div class="col-sm-6">
                    <input type="file" name="galeria" multiple="multiple" id="galeria" value="Seleccione Imagenes">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form>
    </div>
</div>