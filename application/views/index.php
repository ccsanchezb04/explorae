<div class="container">
<?php 
    $data['page'] = "home";
    $this->load->view('layout/topnavbar', $data);
    $this->load->view('layout/carousel', $data);
?>
</div>
<div class="row" id="sub-menu">
    <div class="container">    
        <div class="col-md-3">
            <a href="" target="_BLANK">
                <h4>Eventos Sociales</h4>
                <img src="<?php echo base_url(); ?>public/images/sociales_menu.png" class="img-responsive" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <a href="" target="_BLANK">
                <h4>Eventos Empresariales</h4>
                <img src="<?php echo base_url(); ?>public/images/empresariales_menu.png" class="img-responsive" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <a href="" target="_BLANK">
                <h4>Artistas</h4>
                <img src="<?php echo base_url(); ?>public/images/artistas_menu.png" class="img-responsive" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <a href="" target="_BLANK">
                <h4>Alquiler de equipos</h4>
                <img src="<?php echo base_url(); ?>public/images/equipo_menu.png" class="img-responsive" alt="">
            </a>
        </div>
    </div> 
</div>