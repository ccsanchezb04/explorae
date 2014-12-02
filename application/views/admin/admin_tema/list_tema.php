<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos de la temática</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstDeco as $key): ?>
        <tr>
            <th>ID temática</th>
            <td><?php echo $key->id_tematica; ?></td>
        </tr>
        <tr>
            <th>Nombres del temática</th>
            <td><?php echo $key->nombre_tematica; ?></td>
        </tr> 
        <tr>
            <th>Categoria</th>
            <td><?php 
            for ($i=0; $i < $key->categoria_tematica;  $i++) { 
                echo "<span class='glyphicon glyphicon-star'></span>";
            }
            ?></td>
        </tr>
        <tr>
            <th>Precio de la temática</th>
            <td><?php echo $key->precio_tematica; ?></td>
        </tr>                   
        <tr>
            <th>Imagen de la temática</th>
            <td><img class="img-responsive" src="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" alt=""></td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>