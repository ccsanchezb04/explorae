<?php $data['page'] = "admin-quote"; ?>
    <div class="container" id="content-backend">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('layout/navs_backend', $data); ?>
                <?php $this->load->view('layout/form_quote'); ?>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="">
                        <div class="row" id="head-backend">
                            <div class="col-md-6">
                                <a href="#" type="button" id="add-quote" data-toggle="modal" data-target="#form-quote" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="AGREGAR">
                                    Agregar Cotización
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
                        <table class="table table-striped" id="panel">
                            <tr>
                                <th>Cliente</th>
                                <th>Tipo Evento</th>
                                <th>Total</th>
                                <th>Fecha del evento</th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($quote as $key): ?>
                            <?php                                 

                                $id = $key->cliente_id;

                                $this->db->from('clientes');
                                $this->db->join('cotizacion_evento', 'cotizacion_evento.cliente_id = clientes.id_cliente', 'LEFT');
                                $this->db->where("clientes.id_cliente = ".$id."");

                                $query = $this->db->get();
                                foreach ($query->result() as $row) 
                                {
                                    $cliente_name = $row->nombres." ".$row->apellidos;
                                }
                            ?>
                            <tr>
                                <td><?php echo $cliente_name; ?></td>
                                <td><?php echo $key->nombre_evento; ?></td>
                                <td><?php echo $key->total; ?></td>
                                <td><?php echo $key->fecha_evento; ?></td>
                                <td>                    
                                    <a href="<?php echo base_url(); ?>asesor/list_client/<?php echo $key->id_cotizacion; ?>/<?php echo $key->cliente_id; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR">
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>asesor/upd_client/<?php echo $key->id_cotizacion; ?>/<?php echo $key->cliente_id; ?>" type='button' class='btn btn-sm btn-primary iframe cboxElement'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
                                        <span class='glyphicon glyphicon-cog'></span>
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