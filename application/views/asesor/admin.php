<?php $data['page'] = "admin"; ?>
    <div class="container" id="content-backend">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('layout/navs_backend', $data); ?>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="usuarios">
                        <div class="row" id="head-backend">
                            <div class="col-md-6">
                                <a href="<?php echo base_url(); ?>asesor/add_client" type="button" class="btn btn-primary btn-block iframe cboxElement" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                                    Agregar Cliente
                                </a>
                            </div>
                            <div class="col-md-6">                                
                                <div class="btn-group btn-block">                                
                                    <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nameUser'); ?>&nbsp;<span class="caret"></span>            
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo base_url(); ?>">Ir a pagina</a></li>                                    
                                        <li><a href="<?php echo base_url(); ?>admin/data_upd/<?php echo $this->session->userdata('idUser'); ?>" class="iframe cboxElement">Modificar Perfil</a></li>                                                                                               
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesión</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                        <ul class="nav nav-tabs" role="tablist" id="page-backend">                            
                            <li class="active"><a href="#web" role="tab" data-toggle="tab">Clientes WEB</a></li>
                            <li><a href="#formulario" role="tab" data-toggle="tab">Clientes Formulario</a></li>
                        </ul>
                        <div class="tab-content"> 
                            <div class="tab-pane active" id="web">
                                <table class="table table-striped" id="panel">
                                    <tr>
                                        <th>Identificación</th>
                                        <th>Nombre Completo</th>
                                        <th>Telefono Movil</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    <?php foreach ($lstcw as $key): ?>
                                    <tr>
                                        <td><?php echo $key->no_identificacion; ?></td>
                                        <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
                                        <td><?php echo $key->telefono_movil; ?></td>
                                        <td><?php echo $key->email; ?></td>
                                        <td>                    
                                            <a href="<?php echo base_url(); ?>asesor/list_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                                <span class='glyphicon glyphicon-eye-open'></span>
                                            </a>
                                            <a href="<?php echo base_url(); ?>asesor/upd_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                                <span class='glyphicon glyphicon-cog'></span>
                                            </a>
                                        <?php if ($key->estado == "Activo"): ?>
                                            <a href="<?php echo base_url(); ?>admin/inact_user/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / DESACTIVAR">
                                                <span class='glyphicon glyphicon-remove'></span>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>admin/act_user/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / ACTIVAR">
                                                <span class='glyphicon glyphicon-ok'></span>
                                            </a>
                                        <?php endif ?>                           
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                            <div class="tab-pane" id="formulario">
                                <table class="table table-striped" id="panel">
                                    <tr>
                                        <th>Identificación</th>
                                        <th>Nombre Completo</th>
                                        <th>Telefono Movil</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                    <?php foreach ($lstcf as $key): ?>
                                    <tr>
                                        <td><?php echo $key->no_identificacion; ?></td>
                                        <td><?php echo $key->nombres." ".$key->apellidos; ?></td>
                                        <td><?php echo $key->telefono_movil; ?></td>
                                        <td><?php echo $key->email; ?></td>
                                        <td>                    
                                            <a href="<?php echo base_url(); ?>asesor/list_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                                <span class='glyphicon glyphicon-eye-open'></span>
                                            </a>
                                            <a href="<?php echo base_url(); ?>asesor/upd_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                                <span class='glyphicon glyphicon-cog'></span>
                                            </a>
                                        <?php if ($key->estado == "Activo"): ?>
                                            <a href="<?php echo base_url(); ?>asesor/inact_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / DESACTIVAR">
                                                <span class='glyphicon glyphicon-remove'></span>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url(); ?>asesor/act_client/<?php echo $key->id_cliente; ?>/cliente" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="CAMBIAR ESTADO / ACTIVAR">
                                                <span class='glyphicon glyphicon-ok'></span>
                                            </a>
                                        <?php endif ?>                                  
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
    </div>