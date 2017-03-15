<div class="container">
<?php echo validation_errors(); ?>
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Agregar Menú</h3>
        </div>
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/add_artist" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombre del artista:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_artista" id="nombres">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Precio del contrato:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio_contrato" id="apellidos">
                </div>                
            </div>  
            <div class="form-group">
                <label for="categoria" class="col-sm-4 control-label">Categoria del artista</label>
                <div class="col-sm-6">
                    <select name="categoria_artista" id="categoria_artista" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div> 
            </div> 
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Nombre del contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre_contacto" id="apellidos">
                </div>                
            </div>         
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Telefono del contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="tel_contacto" id="apellidos">
                </div>                
            </div>
             <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Correo de contacto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email_contacto" id="apellidos">
                </div>                
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Lista de canciones</label>
                <div class="col-sm-6">
                    <textarea name="lista_canciones" class="form-control" cols="30" rows="5"></textarea>
                </div>                
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Tipo de artista</label>
                <div class="col-sm-6">
                    <select name="tipo_artista" id="categoria_artista" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="solista">Solista</option>
                        <option value="grupo">Grupo</option>
                    </select>
                </div>                
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Imagen del artista:</label>
                <div class="col-sm-6">
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <span class="fileupload-new">Seleccione Imagen</span>
                                <span class="fileupload-exists">Cambiar</span>
                                <input type="file" name="imagen_artista" accept="image/png image/jpg">
                            </span>
                            <a href="#" class="btn btn-info fileupload-exists" data-dismiss="fileupload">Remover</a>
                        </div>
                    </div>
                </div>                                
                <input type="hidden" name="id" value="default">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form>
    </div>
</div>