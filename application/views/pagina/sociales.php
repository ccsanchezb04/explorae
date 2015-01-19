<div class="container">
    <?php 
        $data['page'] = "sociales";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="sociales">
        <div class="col-md-12">
            <h3>Eventos Sociales</h3>
            <?php foreach ($social as $key): ?>
            <div class="boxgrid captionfull">
                <img src="<?php echo base_url(); ?>public/images/page/eventos_sociales/<?php echo $key->imagen_social; ?>" alt="">
                  <div class="cover boxcaption" style="top: 260px;">
                    <h4><?php echo $key->nombre_evento; ?></h4>   
                    <a href="" target="_BLANK">
                    </a>
                </div>    
            </div>
            <?php endforeach ?> 
        </div>
    </div>
</div>