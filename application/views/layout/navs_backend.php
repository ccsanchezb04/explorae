<div id="navs-admin">
    <div id="logo-img">
        <img src="<?php echo base_url(); ?>public/images/logo.png" class="img-responsive" alt="Explora Eventos">
    </div>
    <ul class="nav nav-pills nav-stacked">
    <?php if ($this->session->userdata('roleUser') == "admin"): ?>
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin">Gestión Usuarios</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/salon">Gestión Salones</a>                     
        </li>
        <li <?php if ($page=="admin-deco") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/decoracion">Gestión Decoración</a>                     
        </li>
        <li <?php if ($page=="admin-tema") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/tematica">Gestión Temáticas</a>                     
        </li>
        <li <?php if ($page=="admin-menu") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/menu">Gestión Menú</a>                     
        </li>
        <li <?php if ($page=="admin-event") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/evento">Gestión Eventos</a>                     
        </li>        
        <li <?php if ($page=="admin-artista") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/artista">Gestión Artistas</a>                     
        </li>
        <li <?php if ($page=="admin-equipo") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>admin/equipo">Gestion Equipos</a>                     
        </li>
    <?php else: ?>
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>asesor/asesor_admin">Gestión Clientes</a>                     
        </li>
        <li <?php if ($page=="admin-quote") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>asesor/admin_quote">Gestión de cotizaciones</a>                     
        </li>
    <?php endif ?>
    </ul>
</div>