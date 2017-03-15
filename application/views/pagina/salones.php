<div class="container">
    <?php 
        $data['page'] = "room";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="rooms">
        <div class="col-md-12">
            <h3>Salones Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room1 as $key): ?>
                <?php if ($room1 >= 0): ?>
                <li id="<?php echo $key->nombre_salon; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_salon; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                    <?php endif ?>
                        <h4>Total de capacidad: <?php echo $key->total_capacidad; ?></h4>
                        <h4>Direccion de ubicación: <?php echo $key->direccion_ubicacion; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <button data-cat="<?php echo $key->categoria_salon; ?>" data-tipo="room" data-img="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" data-nombre="<?php echo $key->nombre_salon; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_salon; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay decoraciones registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room2 as $key): ?>
                <?php if ($room2 >= 0): ?>
                <li id="<?php echo $key->nombre_salon; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_salon; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                    <?php endif ?>
                        <h4>Total de capacidad: <?php echo $key->total_capacidad; ?></h4>
                        <h4>Direccion de ubicación: <?php echo $key->direccion_ubicacion; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <button data-cat="<?php echo $key->categoria_salon; ?>" data-tipo="room" data-img="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" data-nombre="<?php echo $key->nombre_salon; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_salon; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay decoraciones registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room3 as $key): ?>
                <?php if ($room3 >= 0): ?>
                <li id="<?php echo $key->nombre_salon; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_salon; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de alquiler: <b class="text-danger">$<?php echo $key->precio_alquiler; ?></b></h4>
                    <?php endif ?>
                        <h4>Total de capacidad: <?php echo $key->total_capacidad; ?></h4>
                        <h4>Direccion de ubicación: <?php echo $key->direccion_ubicacion; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <button data-cat="<?php echo $key->categoria_salon; ?>" data-tipo="room" data-img="<?php echo base_url(); ?>public/images/page/salones/<?php echo $key->imagen_salon; ?>" data-nombre="<?php echo $key->nombre_salon; ?>" data-precio="<?php echo $key->precio_alquiler; ?>" data-id="<?php echo $key->id_salon; ?>" class="btn btn-xs btn-success add-cart" id="add-cart">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay decoraciones registradas
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