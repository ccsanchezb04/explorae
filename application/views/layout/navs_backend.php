<div id="navs-admin">
    <div id="logo-img">
        <img src="<?php echo base_url(); ?>public/images/logo.png" class="img-responsive" alt="Explora Eventos">
    </div>
    <ul class="nav nav-pills nav-stacked">
    <?php if ($this->session->userdata('roleUser') == "admin"): ?>
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin">Gestión Usuarios</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/salon">Gestión Salones</a>                     
        </li>
        <li <?php if ($page=="admin-deco") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/decoracion">Gestión Decoración</a>                     
        </li>
        <li <?php if ($page=="admin-tema") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/tematica">Gestión Temáticas</a>                     
        </li>
        <li <?php if ($page=="admin-menu") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/menu">Gestión Menú</a>                     
        </li>
        <li <?php if ($page=="admin-event") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/evento">Gestión Eventos</a>                     
        </li>        
        <li <?php if ($page=="admin-artista") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/artista">Gestión Artistas</a>                     
        </li>
        <li <?php if ($page=="admin-equipo") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/equipo">Gestion Equipos</a>                     
        </li>
    <?php else: ?>
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Asesor/asesor_admin">Gestión Clientes</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/salon">Gestión de cotizaciones</a>                     
        </li>
    <?php endif ?>
    </ul>
</div>