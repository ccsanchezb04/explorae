<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos del usuario</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstr as $key): ?>
        <tr>
            <th>ID Salon</th>
            <td><?php echo $key->id_salon; ?></td>
        </tr>
        <tr>
            <th>Nombres del salon</th>
            <td><?php echo $key->nombre_salon; ?></td>
        </tr> 
        <tr>
            <th>Precio de alquiler</th>
            <td><?php echo $key->precio_alquiler; ?></td>
        </tr>
        <tr>
            <th>Direccion de ubicacion</th>
            <td><?php echo $key->direccion_ubicacion; ?></td>
        </tr>            
        <tr>
            <th>Total de capacidad</th>
            <td><?php echo $key->total_capacidad; ?></td>
        </tr>
         <tr>
            <th>Categoria</th>
            <td><?php echo $key->categoria_salon; ?></td>
        </tr>             
        <tr>
            <th>Nombre del contacto</th>
            <td><?php echo $key->nombre_contacto; ?></td>
        </tr>
        <tr>
            <th>Telefono de contacto</th>
            <td><?php echo $key->telefono_contacto; ?></td>
        </tr>
        <tr>
            <th>Correo de contacto</th>
            <td><?php echo $key->email_contacto; ?></td>
        </tr>
        <tr>
            <th>Imagen del salon</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>