<?php $data['page'] = "admin-salon"; ?>
<div class="container" id="content-backend">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layout/navs_backend', $data); ?>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="salones">
                    <div class="row" id="head-backend">
                        <div class="col-md-6">
                            <a href="<?php echo base_url(); ?>Admin/add_room" type="button" class="btn btn-primary btn-block iframe cboxElement" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                                Agregar Salon
                            </a>
                        </div>
                        <div class="col-md-6">                                
                            <div class="btn-group btn-block">                                
                                <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nameUser'); ?>&nbsp;<span class="caret"></span>            
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Ir a pagina</a></li>                                    
                                    <li><a href="<?php echo base_url(); ?>Admin/data_upd/<?php echo $this->session->userdata('idUser'); ?>" class="iframe cboxElement">Modificar Perfil</a></li>                                                                                               
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>Login/close">Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped" id="panel">
                        <tr>
                            <th>Nombre del salon</th>
                            <th>Precio de alquiler</th>
                            <th>Nombre de contacto</th>
                            <th>Correo de contacto</th>
                            <th>Acciones</th>
                        </tr>
                        <?php foreach ($lstr as $key): ?>
                        <tr>
                            <td><?php echo $key->nombre_salon; ?></td>
                            <td><?php echo $key->precio_alquiler; ?></td>
                            <td><?php echo $key->nombre_contacto; ?></td>
                            <td><?php echo $key->email_contacto; ?></td>
                            <td>                    
                                <a href="<?php echo base_url(); ?>Admin/list_room/<?php echo $key->id_salon; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                    <span class='glyphicon glyphicon-eye-open'></span>
                                </a>
                                <a href="<?php echo base_url(); ?>Admin/upd_room/<?php echo $key->id_salon; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                    <span class='glyphicon glyphicon-cog'></span>
                                </a>
                                <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_salon; ?>" data-rol="room" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                    <span class='glyphicon glyphicon-trash'></span>
                                </a>                    
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>  
            </div>  
        </div>  
    </div>  
</div>  