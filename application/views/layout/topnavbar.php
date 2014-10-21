<header>
    <div class="row">          
        <nav class="navbar navbar-default" id="navbar-header" role="navigation">
            <div class="col-md-2" id="logo">        
                <img src="<?php echo base_url(); ?>public/images/logo.png" class="img-responsive" alt="Explora Eventos">        
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>        
                </div>
            </div>
            <div class="col-md-10">
                <div class="navbar-header">   
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li <?php if ($page == "home") echo "class='active'"; ?>><a href="index.php">Inicio</a></li>
                            <li <?php //if ($page == "") echo "class='active'"; ?>><a href="#">Salones</a></li>
                            <li <?php //if ($page == "") echo "class='active'"; ?>><a href="backend_shopping.php">Decoración</a></li>
                            <li <?php //if ($page == "") echo "class='active'"; ?>><a href="backend_buyer.php">Temáticas</a></li>
                            <li <?php //if ($page == "") echo "class='active'"; ?>><a href="backend_buyer.php">Menú</a></li>
                            <li <?php //if ($page == "") echo "class='active'"; ?>><a href="backend_buyer.php">Cotiza Ya</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('roleUser') == "admin" || $this->session->userdata('roleUser') == "asesor"): ?>
                    <li><a href="<?php echo base_url(); ?>Login/close">Iniciar Sesión</a></li>
                <?php else: ?>
                    <li><a href="#" data-toggle="modal" data-target="#login">Iniciar Sesión</a></li>
                <?php endif ?>                       
                </ul>
            </div>            
        </nav>
        <ul id="navigationMenu">
            <li><a class="cotiza" href="formulario.php"><span>Cotizanos Ya</span></a></li>           
            <li><a class="facebook" href="https://www.facebook.com/pages/Explora-Eventos/260561217452786?fref=ts"><span>Facebook</span></a></li>         
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>           
            <li><a class="youtube" href="#"><span>Youtube</span></a></li>       
        </ul>
    </div>
</header>