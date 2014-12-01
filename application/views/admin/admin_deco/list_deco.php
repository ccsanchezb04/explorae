<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos de la decoración</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstDeco as $key): ?>
        <tr>
            <th>ID Decoración</th>
            <td><?php echo $key->id_decoracion; ?></td>
        </tr>
        <tr>
            <th>Nombres del decoración</th>
            <td><?php echo $key->nombre_decoracion; ?></td>
        </tr> 
        <tr>
            <th>Categoria</th>
            <td><?php 
            for ($i=0; $i < $key->categoria_decoracion;  $i++) { 
                echo "<span class='glyphicon glyphicon-star'></span>";
            }
            ?></td>
        </tr>
        <tr>
            <th>Precio de la decoración</th>
            <td><?php echo $key->precio_decoracion; ?></td>
        </tr>                   
        <tr>
            <th>Nombre del contacto</th>
            <td><?php echo $key->contacto_decoracion; ?></td>
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
            <th>Imagen del decoración</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/decoraciones/<?php echo $key->imagen_decoracion; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>