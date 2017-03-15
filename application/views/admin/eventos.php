<?php $data['page'] = "admin-event"; ?>
<div class="container" id="content-backend">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layout/navs_backend', $data); ?>
        </div>
        <div class="col-md-9">            
            <div class="row" id="head-backend">
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>admin/add_event" type="button" class="btn btn-primary btn-block iframe cboxElement" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                        Agregar Evento
                    </a>
                </div>
                <div class="col-md-6">                                
                    <div class="btn-group btn-block">                                
                        <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nameUser'); ?>&nbsp;<span class="caret"></span>            
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Ir a pagina</a></li>                                    
                            <li><a href="<?php echo base_url(); ?>admin/data_upd/<?php echo $this->session->userdata('idUser'); ?>" class="iframe cboxElement">Modificar Perfil</a></li>                                                                                               
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#sociales" aria-controls="cate1" role="tab" data-toggle="tab">Eventos Sociales</a></li>
                    <li role="presentation"><a href="#empresariales" aria-controls="cate2" role="tab" data-toggle="tab">Eventos Empresariales</a></li>                    
                </ul>

              <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="sociales">    
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del evento</th>                           
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($social as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_evento; ?></td>                                                                
                                <td>                    
                                    <a href="<?php echo base_url(); ?>admin/list_event/<?php echo $key->id_sociales; ?>/social" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/upd_event/<?php echo $key->id_sociales; ?>/social" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_sociales; ?>" data-rol="sociales" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="empresariales">
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del evento</th>                            
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($empresa as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_evento; ?></td>                                                               
                                <td>                    
                                    <a href="<?php echo base_url(); ?>admin/list_event/<?php echo $key->id_empresariales; ?>/empresarial" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/upd_event/<?php echo $key->id_empresariales; ?>/empresarial" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_empresariales; ?>" data-rol="sociales" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
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
</div>  