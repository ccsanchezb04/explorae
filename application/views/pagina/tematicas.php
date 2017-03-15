<div class="container">
    <?php 
        $data['page'] = "tema";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="temas">
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($tema1 as $key): ?>
                <?php if ($tema1 >= 0): ?>
                <li id="<?php echo $key->nombre_tematica; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_tematica; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de tematica: <b class="text-danger">$<?php echo $key->precio_tematica; ?></b></h4>
                       <button data-cat="<?php echo $key->categoria_tematica; ?>" data-tipo="tema" data-img="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" data-nombre="<?php echo $key->nombre_tematica; ?>" data-precio="<?php echo $key->precio_tematica; ?>" data-id="<?php echo $key->id_tematica; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay tematicaes registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($tema2 as $key): ?>
                <?php if ($tema2 >= 0): ?>
                <li id="<?php echo $key->nombre_tematica; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_tematica; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de tematica: <b class="text-danger">$<?php echo $key->precio_tematica; ?></b></h4>
                       <button data-cat="<?php echo $key->categoria_tematica; ?>" data-tipo="tema" data-img="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" data-nombre="<?php echo $key->nombre_tematica; ?>" data-precio="<?php echo $key->precio_tematica; ?>" data-id="<?php echo $key->id_tematica; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay tematicaes registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($tema3 as $key): ?>
                <?php if ($tema3 >= 0): ?>
                <li id="<?php echo $key->nombre_tematica; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_tematica; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de tematica: <b class="text-danger">$<?php echo $key->precio_tematica; ?></b></h4>
                       <button data-cat="<?php echo $key->categoria_tematica; ?>" data-tipo="tema" data-img="<?php echo base_url(); ?>public/images/page/tematicas/<?php echo $key->imagen_tematica; ?>" data-nombre="<?php echo $key->nombre_tematica; ?>" data-precio="<?php echo $key->precio_tematica; ?>" data-id="<?php echo $key->id_tematica; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay tematicaes registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="respuesta">
            
        </div>
    </div>
</div>