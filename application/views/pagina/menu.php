<div class="container">
    <?php 
        $data['page'] = "menu";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="menus">
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($menu1 as $key): ?>
                <?php if ($menu1 >= 0): ?>
                <li id="<?php echo $key->nombre_menu; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/menus/<?php echo $key->imagen_menu; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_menu; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de menu: <b class="text-danger">$<?php echo $key->precio_menu; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_menu; ?>,'menu')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay menues registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($menu2 as $key): ?>
                <?php if ($menu2 >= 0): ?>
                <li id="<?php echo $key->nombre_menu; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/menus/<?php echo $key->imagen_menu; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_menu; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de menu: <b class="text-danger">$<?php echo $key->precio_menu; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_menu; ?>,'menu')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay menues registradas
                    </div>
                </li> 
                <?php endif ?>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <ul class="bxslider">                
            <?php foreach ($menu3 as $key): ?>
                <?php if ($menu3 >= 0): ?>
                <li id="<?php echo $key->nombre_menu; ?>" class="producto">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>public/images/page/menus/<?php echo $key->imagen_menu; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href=""><h2><?php echo $key->nombre_menu; ?></h2></a>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de menu: <b class="text-danger">$<?php echo $key->precio_menu; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_menu; ?>,'menu')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <div class="alert alert-info" role="alert">
                        No hay menues registradas
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