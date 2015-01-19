<div class="container">
    <?php 
        $data['page'] = "deco";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="decos">
        <div class="col-md-12">
            <h3>Decoración Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($deco1 as $key): ?>
                <?php if ($deco1 >= 0): ?>
                <li id="<?php echo $key->nombre_decoracion; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/decoraciones/<?php echo $key->imagen_decoracion; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_decoracion; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de decoracion: <b class="text-danger">$<?php echo $key->precio_decoracion; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_decoracion; ?>,'decoracion')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
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
            <h3>Decoración Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($deco2 as $key): ?>
                <?php if ($deco2 >= 1): ?>
                <li id="<?php echo $key->nombre_decoracion; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/decoraciones/<?php echo $key->imagen_decoracion; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_decoracion; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de decoracion: <b class="text-danger">$<?php echo $key->precio_decoracion; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_decoracion; ?>,'decoracion')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
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
            <h3>Decoración Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($deco3 as $key): ?>
                <?php if ($deco3 >= 0): ?>
                <li id="<?php echo $key->nombre_decoracion; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/decoraciones/<?php echo $key->imagen_decoracion; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_decoracion; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de decoracion: <b class="text-danger">$<?php echo $key->precio_decoracion; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_decoracion; ?>,'decoracion')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
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