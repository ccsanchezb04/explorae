<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos de la menú</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstMenu as $key): ?>
        <tr>
            <th>ID Menú</th>
            <td><?php echo $key->id_menu; ?></td>
        </tr>
        <tr>
            <th>Nombres del menú</th>
            <td><?php echo $key->nombre_menu; ?></td>
        </tr> 
        <tr>
            <th>Categoria</th>
            <td><?php 
            for ($i=0; $i < $key->categoria_menu;  $i++) { 
                echo "<span class='glyphicon glyphicon-star'></span>";
            }
            ?></td>
        </tr>        
        <tr>
            <th>Precio del menú</th>
            <td><?php echo $key->precio_menu; ?></td>
        </tr>
        <tr>
           <th>Coctel</th>
           <td><?php echo $key->coctel; ?></td>
       </tr>
       <tr>
           <th>Pasabocas</th>
           <td><?php echo $key->pasabocas; ?></td>
       </tr>
       <tr>
           <th>Carne</th>
           <td><?php echo $key->carne; ?></td>
       </tr>
       <tr>
           <th>Arroz</th>
           <td><?php echo $key->arroz; ?></td>
       </tr>
       <tr>
           <th>Ensalada</th>
           <td><?php echo $key->ensalada; ?></td>
       </tr>
       <tr>
           <th>Bocado Acompañanate</th>
           <td><?php echo $key->bocado_acompanante; ?></td>
       </tr>                   
        <tr>
            <th>Imagen del menú</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/menus/<?php echo $key->imagen_menu; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>