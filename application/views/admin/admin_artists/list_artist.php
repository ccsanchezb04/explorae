<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos del artista</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstArtist as $key): ?>
        <tr>
            <th>ID Artista</th>
            <td><?php echo $key->id_artista; ?></td>
        </tr>
        <tr>
            <th>Nombres del artista</th>
            <td><?php echo $key->nombre_artista; ?></td>
        </tr> 
        <tr>
            <th>Categoria</th>
            <td><?php 
            for ($i=0; $i < $key->categoria_artista;  $i++) { 
                echo "<span class='glyphicon glyphicon-star'></span>";
            }
            ?></td>
        </tr>        
        <tr>
            <th>Precio del artista</th>
            <td><?php echo $key->precio_contrato; ?></td>
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
           <th>Lista de canciones</th>
           <td><?php echo $key->lista_canciones; ?></td>
       </tr>
       <tr>
           <th>Tipo de artista</th>
           <td><?php echo $key->tipo_artista; ?></td>
       </tr>                  
        <tr>
            <th>Imagen del artista</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/artistas/<?php echo $key->imagen_artista; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>