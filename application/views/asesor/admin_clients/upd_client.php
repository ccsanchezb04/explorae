<div class="container">
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Usuario</h3>
        </div>
    <?php foreach ($lstc as $key): ?>
        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombres:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombres" value="<?php echo $key->nombres; ?>" id="nombres">                    
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Apellidos:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $key->apellidos; ?>" id="apellidos">
                </div>                
            </div>            
            <div class="form-group">
                <label for="identificacion" class="col-sm-4 control-label">No. Identificacion:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="no_identificacion" value="<?php echo $key->no_identificacion; ?>" id="identificacion">
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Correo Electronico:</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" value="<?php echo $key->email; ?>" id="email">
                </div> 
            </div>
            <div class="form-group">
                <label for="fijo" class="col-sm-4 control-label">Telefono Fijo:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_fijo" value="<?php echo $key->telefono_fijo; ?>" id="fijo">
                </div> 
            </div>
            <div class="form-group">
                <label for="movil" class="col-sm-4 control-label">Telefono Movil:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_movil" value="<?php echo $key->telefono_movil; ?>" id="movil">
                </div>                     
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Direccion Residencia:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="direccion" value="<?php echo $key->direccion_residencia; ?>" id="direccion">
                </div> 
            </div>
            <div class="form-group">
                <label for="ciudad" class="col-sm-4 control-label">Ciudad Residencia:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ciudad" value="<?php echo $key->ciudad_residencia; ?>" id="ciudad">
                </div>                   
            </div>   
            <div class="form-group">
                <label for="estado" class="col-sm-4 control-label">Estado:</label>
                <div class="col-sm-6">                        
                    <select name="estado" id="estado" class="form-control">
                        <option <?php if ($key->estado == "Activo") { echo "selected='selected'"; } ?> value="Activo">Activo</option>
                        <option <?php if ($key->estado == "Inactivo") { echo "selected='selected'"; } ?> value="Inactivo">Inactivo</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $key->id_cliente; ?>">
                <input type="hidden" name="procedencia" value="<?php echo $key->procedencia; ?>">                
                <input type="hidden" name="fecha_registro" value="<?php echo $key->fecha_registro; ?>">  
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