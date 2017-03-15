<div class="container">
   <div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Agregar Usuario</h3>
        </div>
        <form class="form-horizontal" role="form"method="post" action="<?php echo base_url(); ?>admin/add_user">
            <div class="form-group">
                <label for="nombres" class="col-sm-4 control-label">Nombres:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombres" id="nombres">
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-sm-4 control-label">Apellidos:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                </div>                
            </div>            
            <div class="form-group">
                <label for="identificacion" class="col-sm-4 control-label">No. Identificacion:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="no_identificacion" id="identificacion">
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Correo Electronico:</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="email">
                </div> 
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Contraseña:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" id="password">
                </div> 
            </div>
            <div class="form-group">
                <label for="fijo" class="col-sm-4 control-label">Telefono Fijo:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_fijo" id="fijo">
                </div> 
            </div>
            <div class="form-group">
                <label for="movil" class="col-sm-4 control-label">Telefono Movil:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="tel_movil" id="movil">
                </div>                     
            </div>
            <div class="form-group">
                <label for="direccion" class="col-sm-4 control-label">Direccion Residencia:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div> 
            </div>
            <div class="form-group">
                <label for="ciudad" class="col-sm-4 control-label">Ciudad Residencia:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ciudad" id="ciudad">
                </div>                   
            </div>           
            <div class="form-group">
                <label for="tipo_usuario" class="col-sm-4 control-label">Tipo de usuario:</label>
                <div class="col-sm-6">                        
                    <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="admin">Administrador</option>
                        <option value="asesor">Asesor(a)</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </div>                                
                <input type="hidden" name="id" value="default">
                <input type="hidden" name="estado" value="Activo">
                <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="procedencia" value="web"> 
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Agregar</button>
                </div> 
            </div>
        </form>
    </div>
</div>