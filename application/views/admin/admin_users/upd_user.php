<div class="container">
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Modificar Usuario</h3>
        </div>
    <?php foreach ($lstu as $key): ?>
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
                <label for="password" class="col-sm-4 control-label">Contraseña:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $key->password; ?>" id="password">
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
                <label for="tipo_usuario" class="col-sm-4 control-label">Tipo de usuario:</label>
                <div class="col-sm-6">                        
                    <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                        <option <?php if ($key->tipo_usuario == "admin") { echo "selected='selected'"; } ?> value="admin">Administrador</option>
                        <option <?php if ($key->tipo_usuario == "asesor") { echo "selected='selected'"; } ?> value="asesor">Asesor(a)</option>
                        <option <?php if ($key->tipo_usuario == "cliente") { echo "selected='selected'"; } ?> value="cliente">Cliente</option>
                    </select>
                </div> 
            </div>
            <div class="form-group">
                <label for="estado" class="col-sm-4 control-label">Tipo de usuario:</label>
                <div class="col-sm-6">                        
                    <select name="estado" id="estado" class="form-control">
                        <option <?php if ($key->estado == "Activo") { echo "selected='selected'"; } ?> value="Activo">Activo</option>
                        <option <?php if ($key->estado == "Inactivo") { echo "selected='selected'"; } ?> value="Inactivo">Inactivo</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $key->id_usuario; ?>">
                <input type="hidden" name="fecha_registro" value="<?php echo $key->fecha_registro; ?>"> 
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form> 
    <?php endforeach ?>
    </div>
</div>