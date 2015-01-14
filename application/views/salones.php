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
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_salon; ?>,'salon')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room2 as $key): ?>
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
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_salon; ?>,'salon')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room3 as $key): ?>
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
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_salon; ?>,'salon')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="respuesta">
            
        </div>
    </div>
</div>