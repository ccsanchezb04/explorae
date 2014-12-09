<div class="panel panel-default">   
    <div class="panel-heading">
        <h3 class="text-info">Consultar datos de la evento</h3>
    </div>
    
    <table class="table table-striped pull-center">     
    
    <?php foreach ($lstEvent as $key): ?>
        <tr>
            <th>ID Evento</th>
            <td><?php 
                if ($tipo_evento == "social") 
                {
                    echo $key->id_sociales;
                }
                else
                {
                    echo $key->id_empresariales;
                }
            ?></td>
        </tr>
        <tr>
            <th>Nombre del evento</th>
            <td><?php echo $key->nombre_evento; ?></td>
        </tr> 
        <tr>
            <th>Descripción</th>
            <td><?php echo $key->descripcion; ?></td>
        </tr>        
        
            <th>Imagen del evento</th>
            <td>
            <?php 
                if ($tipo_evento == "social") 
                {
                    echo "<img class='img-responsive' src='".base_url()."public/images/page/eventos_sociales/".$key->imagen_social."'>";
                } 
                else 
                {
                    echo "<img class='img-responsive' src='".base_url()."public/images/page/eventos_empresariales/".$key->imagen_empresarial."'>";
                } 
            ?>
            </td>
        </tr>
    <?php endforeach ?>
    </table>        
</div>
<img class="img-responsive" src="" alt="">
