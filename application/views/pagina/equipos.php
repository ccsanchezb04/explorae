<div class="container">
    <?php 
        $data['page'] = "tool";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="tools">
        <div class="col-md-12">
            <h3>Equipo Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($equipo1 as $key): ?>
                <?php if ($equipo1 >= 0): ?>
                <li id="<?php echo $key->nombre_equipo; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_equipo; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                        <button data-cat="<?php echo $key->categoria_equipo; ?>" data-tipo="tools" data-img="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" data-nombre="<?php echo $key->nombre_equipo; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_equipo; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay equipos registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Equipo Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($equipo2 as $key): ?>
                <?php if ($equipo2 >= 0): ?>
                <li id="<?php echo $key->nombre_equipo; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_equipo; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                        <button data-cat="<?php echo $key->categoria_equipo; ?>" data-tipo="tools" data-img="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" data-nombre="<?php echo $key->nombre_equipo; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_equipo; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay equipos registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Equipo Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($equipo3 as $key): ?>
                <?php if ($equipo3 >= 0): ?>
                <li id="<?php echo $key->nombre_equipo; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_equipo; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                        <button data-cat="<?php echo $key->categoria_equipo; ?>" data-tipo="tools" data-img="<?php echo base_url(); ?>public/images/page/equipos/<?php echo $key->imagen_equipo; ?>" data-nombre="<?php echo $key->nombre_equipo; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_equipo; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay equipos registradas
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