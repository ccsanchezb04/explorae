
    <div class="row">
        <div class="col-md-12">
            <h3>Salones Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room1 as $key): ?>
                <li>
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
                        <a href="<?php echo base_url(); ?>//<?php echo $key->id_salon; ?>" class="btn btn-sm btn-success">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room2 as $key): ?>
                <li>
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
                        <a href="<?php echo base_url(); ?>//<?php echo $key->id_salon; ?>" class="btn btn-sm btn-success">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Salones Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($room3 as $key): ?>
                <li>
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
                        <a href="<?php echo base_url(); ?>//<?php echo $key->id_salon; ?>" class="btn btn-sm btn-success">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div>
                </li>
            <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>