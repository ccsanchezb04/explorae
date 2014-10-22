<div id="navs-admin">
    <div id="logo-img">
        <img src="<?php echo base_url(); ?>public/images/logo.png" class="img-responsive" alt="Explora Eventos">
    </div>
    <ul class="nav nav-pills nav-stacked">
        <li <?php if ($page=="admin") {echo "class='active'";} ?>>
            <a href="#usuarios" data-toggle="tab">Gestión Usuarios</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="#salones" data-toggle="tab">Gestión Salones</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="#salones" data-toggle="tab">Gestión Decoración</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="#salones" data-toggle="tab">Gestión Temáticas</a>                     
        </li>
        <li <?php if ($page=="admin-salon") {echo "class='active'";} ?>>
            <a href="#salones" data-toggle="tab">Gestión Menú</a>                     
        </li>
        <li <?php if ($page=="admin-evento") {echo "class='active'";} ?>>
            <a href="#eventos" data-toggle="tab">Gestión Eventos</a>                     
        </li>        
        <li <?php if ($page=="admin-artista") {echo "class='active'";} ?>>
            <a href="#artistas" data-toggle="tab">Gestión Artistas</a>                     
        </li>
        <li <?php if ($page=="admin-equipo") {echo "class='active'";} ?>>
            <a href="#equipos" data-toggle="tab">Gestion Equipos</a>                     
        </li>
        <div class="btn btn-danger btn-block" id="close-session">
            <a href="<?php base_url(); ?>Login/close" id="">Cerrar Sesión</a>
        </div>
    </ul>
</div>