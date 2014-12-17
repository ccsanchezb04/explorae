<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos del cliente</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstc as $key): ?>
        <tr>
            <th>ID Usuario</th>
            <td><?php echo $key->id_cliente; ?></td>
        </tr>
        <tr>
            <th>Nombres y Apellidos</th>
            <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
        </tr> 
        <tr>
            <th>N° de identificacion</th>
            <td><?php echo $key->no_identificacion; ?></td>
        </tr>
        <tr>
            <th>Correo Electronico</th>
            <td><?php echo $key->email; ?></td>
        </tr>            
        <tr>
            <th>Telefono Fijo</th>
            <td><?php echo $key->telefono_fijo; ?></td>
        </tr>            
        <tr>
            <th>Telefono Movil</th>
            <td><?php echo $key->telefono_movil; ?></td>
        </tr>
        <tr>
            <th>Direccion de residencia</th>
            <td><?php echo $key->direccion_residencia; ?></td>
        </tr>
        <tr>
            <th>Ciudad de residencia</th>
            <td><?php echo $key->ciudad_residencia; ?></td>
        </tr>
        <tr>
            <th>Procedencia</th>
            <td><?php echo $key->procedencia; ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td id="view-state" <?php if ($key->estado == "Activo") { echo "class='text-success'"; }else{ echo "class='text-danger'"; } ?>><?php echo $key->estado; ?></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>