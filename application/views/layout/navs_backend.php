<div id="navs-admin">
    <div id="logo-img">
        <img src="<?php echo base_url(); ?>public/images/logo.png" class="img-responsive" alt="Explora Eventos">
    </div>
    <ul class="nav nav-pills nav-stacked">
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin">Gestión Usuarios</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="<?php echo base_url(); ?>Admin/salon">Gestión Salones</a>                     
        </li>
        <li <?php if ($page=="admin-") {echo "class='active'";} ?>>
            <a href="#salones">Gestión Decoración</a>                     
        </li>
        <li <?php if ($page=="admin-") {echo "class='active'";} ?>>
            <a href="#salones">Gestión Temáticas</a>                     
        </li>
        <li <?php if ($page=="admin-") {echo "class='active'";} ?>>
            <a href="#salones">Gestión Menú</a>                     
        </li>
        <li <?php if ($page=="admin-evento") {echo "class='active'";} ?>>
            <a href="#eventos">Gestión Eventos</a>                     
        </li>        
        <li <?php if ($page=="admin-artista") {echo "class='active'";} ?>>
            <a href="#artistas">Gestión Artistas</a>                     
        </li>
        <li <?php if ($page=="admin-equipo") {echo "class='active'";} ?>>
            <a href="#equipos">Gestion Equipos</a>                     
        </li>
    </ul>
</div>