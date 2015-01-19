<div class="container">
    <?php 
        $data['page'] = "artistas";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="artistas">
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span></h3>
            <?php foreach ($artist1 as $key): ?>
            <div class="boxgrid captionfull">
                <img src="<?php echo base_url(); ?>public/images/page/artistas/<?php echo $key->imagen_artista; ?>" alt="">
                  <div class="cover boxcaption" style="top: 260px;">
                    <h4><?php echo $key->nombre_artista; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de contrato: <b class="text-danger">$<?php echo $key->precio_contrato; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_artista; ?>,'artista')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>    
                    <a href="" target="_BLANK">
                    </a>
                </div>    
            </div>
            <?php endforeach ?> 
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <?php foreach ($artist2 as $key): ?>
            <div class="boxgrid captionfull">
                <img src="<?php echo base_url(); ?>public/images/page/artistas/<?php echo $key->imagen_artista; ?>" alt="">
                  <div class="cover boxcaption" style="top: 260px;">
                    <h4><?php echo $key->nombre_artista; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de contrato: <b class="text-danger">$<?php echo $key->precio_contrato; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_artista; ?>,'artista')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>    
                    <a href="" target="_BLANK">
                    </a>
                </div>    
            </div>
            <?php endforeach ?> 
        </div>
        <div class="col-md-12">
            <h3>Temática Categoria <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h3>
            <?php foreach ($artist3 as $key): ?>
            <div class="boxgrid captionfull">
                <img src="<?php echo base_url(); ?>public/images/page/artistas/<?php echo $key->imagen_artista; ?>" alt="">
                  <div class="cover boxcaption" style="top: 260px;">
                    <h4><?php echo $key->nombre_artista; ?></h4>
                    <?php if ($this->session->userdata('roleUser') == "asesor"): ?>
                        <h4>Precio de contrato: <b class="text-danger">$<?php echo $key->precio_contrato; ?></b></h4>
                        <button class="btn btn-xs btn-success" id="add-cart" onclick="add_cart(<?php echo $key->id_artista; ?>,'artista')">Agregar <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    <?php endif ?>    
                    <a href="" target="_BLANK">
                    </a>
                </div>    
            </div>
            <?php endforeach ?> 
        </div>
        <div class="respuesta">
            
        </div>
    </div>
</div>

