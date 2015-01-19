<div class="container">
    <?php 
        $data['page'] = "empresariales";    
        $this->load->view('layout/topnavbar', $data);
    ?>    
    <div class="row" id="empresariales">
        <div class="col-md-12">
            <h3>Eventos empresariales</h3>
            <?php foreach ($empresarial as $key): ?>
            <div class="boxgrid captionfull">
                <img src="<?php echo base_url(); ?>public/images/page/eventos_empresariales/<?php echo $key->imagen_empresarial; ?>" alt="">
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