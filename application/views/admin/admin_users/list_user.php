<div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-info">Consultar datos del usuario</h3>
        </div>
        
        <table class="table table-striped pull-center">     
        
        <?php foreach ($lstu as $key): ?>
            <tr>
                <td>ID Usuario</td>
                <td><?php echo $key->id_usuario; ?></td>
            </tr>
            <tr>
                <td>Nombres y Apellidos</td>
                <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
            </tr> 
            <tr>
                <td>N° de identificacion</td>
                <td><?php echo $key->no_identificacion; ?></td>
            </tr>
            <tr>
                <td>Correo Electronico</td>
                <td><?php echo $key->email; ?></td>
            </tr>            
            <tr>
                <td>Telefono Fijo</td>
                <td><?php echo $key->telefono_fijo; ?></td>
            </tr>            
            <tr>
                <td>Telefono Movil</td>
                <td><?php echo $key->telefono_movil; ?></td>
            </tr>
            <tr>
                <td>Direccion de residencia</td>
                <td><?php echo $key->direccion_residencia; ?></td>
            </tr>
            <tr>
                <td>Ciudad de residencia</td>
                <td><?php echo $key->ciudad_residencia; ?></td>
            </tr>
            <tr>
                <td>Tipo de usuario</td>
                <td><?php echo $key->tipo_usuario; ?></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td id="view-state" <?php if ($key->estado == "Activo") { echo "class='text-success'"; }else{ echo "class='text-danger'"; } ?>><?php echo $key->estado; ?></td>
            </tr>
        <?php endforeach ?>
        </table>        
    </div>