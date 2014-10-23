<div class="panel panel-default">   
        <div class="panel-heading">
            <h3 class="text-warning">Consultar datos del usuario</h3>
        </div>
        
        <table class="table table-striped pull-center">     
        
        <?php foreach ($lstu as $key): ?>
            <tr>
                <td>N° de Identificacion</td>
                <td><?php echo $key->no_identificacion; ?></td>
            </tr>
            <tr>
                <td>Nombres y Apellidos</td>
                <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
            </tr>
            <tr>
                <td>Direccion de Residencia</td>
                <td><?php echo $key->direccion; ?></td>
            </tr>
            <tr>
                <td>Telefono Fijo</td>
                <td><?php echo $key->tel_fijo; ?></td>
            </tr>
            <tr>
                <td>Telefono Movil</td>
                <td><?php echo $key->tel_movil; ?></td>
            </tr>
            <tr>
                <td>Correo Electronico</td>
                <td><?php echo $key->correo_electronico; ?></td>
            </tr>
            <tr>
                <td>Rol</td>
                <td><?php echo $key->rol; ?></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><?php echo $key->estado; ?></td>
            </tr>
        <?php endforeach ?>
        </table>        
    </div>