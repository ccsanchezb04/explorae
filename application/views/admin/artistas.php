<?php $data['page'] = "admin-artista"; ?>
<div class="container" id="content-backend">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layout/navs_backend', $data); ?>
        </div>
        <div class="col-md-9">            
            <div class="row" id="head-backend">
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>Admin/add_artista" type="button" class="btn btn-primary btn-block iframe cboxElement" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                        Agregar artista
                    </a>
                </div>
                <div class="col-md-6">                                
                    <div class="btn-group btn-block">                                
                        <button type="button" class="btn btn-warning dropdown-toggle btn-block" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nameUser'); ?>&nbsp;<span class="caret"></span>            
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Ir a pagina</a></li>                                    
                            <li><a href="<?php echo base_url(); ?>Admin/upd_user/<?php echo $this->session->userdata('idUser'); ?>" class="iframe cboxElement">Modificar Perfil</a></li>                                                                                               
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>Login/close">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#cate1" aria-controls="cate1" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span></a></li>
                    <li role="presentation"><a href="#cate2" aria-controls="cate2" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></a></li>
                    <li role="presentation"><a href="#cate3" aria-controls="cate3" role="tab" data-toggle="tab">Categoria: <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></a></li>                    
                </ul>

              <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="cate1">    
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del artista</th>
                                <th>Precio del artista</th>                               
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($artista1 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_artista; ?></td>
                                <td><?php echo $key->precio_contrato; ?></td>                                
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_artist/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_artist/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_artista; ?>" data-rol="artista" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                            <?php endforeach ?>
                            <tr class="divider"></tr>

                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cate2">
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del artista</th>
                                <th>Precio del artista</th>                               
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($artista2 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_artista; ?></td>
                                <td><?php echo $key->precio_contrato; ?></td>                               
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_artista/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_artista/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_artista; ?>" data-rol="artista" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cate3">
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Nombre del artista</th>
                                <th>Precio del artista</th>                                
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($artista3 as $key): ?>
                            <tr>
                                <td><?php echo $key->nombre_artista; ?></td>
                                <td><?php echo $key->precio_contrato; ?></td>                                
                                <td>                    
                                    <a href="<?php echo base_url(); ?>Admin/list_artista/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>Admin/upd_artista/<?php echo $key->id_artista; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->id_artista; ?>" data-rol="artista" data-toggle="tooltip" data-placement="bottom" title="ELIMINAR">
                                        <span class='glyphicon glyphicon-trash'></span>
                                    </a>                    
                                </td>
                            </tr>
                            <tr class="divider"></tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>            
        </div>  
    </div>  
</div>  