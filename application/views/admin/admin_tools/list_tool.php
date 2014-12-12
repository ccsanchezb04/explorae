<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos del equipo</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstArtist as $key): ?>
        <tr>
            <th>ID equipo</th>
            <td><?php echo $key->id_equipo; ?></td>
        </tr>
        <tr>
            <th>Nombres del equipo</th>
            <td><?php echo $key->nombre_equipo; ?></td>
        </tr> 
        <tr>
            <th>Categoria</th>
            <td><?php 
            for ($i=0; $i < $key->categoria_equipo;  $i++) { 
                echo "<span class='glyphicon glyphicon-star'></span>";
            }
            ?></td>
        </tr>        
        <tr>
            <th>Precio del alquiler</th>
            <td><?php echo $key->precio_alquiler; ?></td>
        </tr>
        <tr>
            <th>Nombre del contacto</th>
            <td><?php echo $key->nombre_contacto; ?></td>
        </tr>
        <tr>
            <th>Telefono del contacto</th>
            <td><?php echo $key->telefono_contacto; ?></td>
        </tr>
        <tr>
            <th>Correo del contacto</th>
            <td><?php echo $key->email_contacto; ?></td>
        </tr>
        <tr>
            <th>Detalles</th>
            <td><?php echo $key->detalles; ?></td>
        </tr>                
        <tr>
            <th>Imagen del equipo</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>