
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="" alt="">
            </div>
            <div class="col-md-8">
                <h2>Explora Eventos</h2>
                <label>Cotización para evento</label>
            </div>
        </div>
       <table class="table table-striped table-bordered">
            <thead>
                <tr>
                  <td colspan="2"><b>Fecha cotización:</b> <span class="fecha-cotizacion"></span></td>
                </tr>
            <?php foreach ($q as $key): ?>
            <?php 
                // $cliente = $key->cliente_id;

                // /*$this->db->from('cotizacion_evento');
                // $this->db->join('clientes', 'cotizacion_evento.cotizacion_id = clientes.id_cliente', 'LEFT');
                // $this->db->where("clientes.id_cliente = ".$id."");*/

                // $query1 = "SELECT * 
                //            FROM cotizacion_evento
                //            INNER JOIN clientes ON cotizacion_evento.cliente_id = clientes.id_cliente                      
                //            WHERE clientes.id_cliente = $cliente;";

                // $query = $this->db->query($query1);
                // foreach ($query->result() as $row) {
                //     echo $nombres   = $row->nombres." ".$row->apellidos;
                //     echo $movil     = $row->telefono_movil;
                //     echo $direccion = $row->direccion_residencia;
                // }
            ?>
               <tr>
                   <th>Nombre cliente:</th>
                   <td colspan="2" class="carrito-nombre-cliente"><?php echo $nombres; ?></td>
                </tr>
                <tr>
                   <th>Dirección cliente:</th>
                   <td colspan="2" class="carrito-direccion-cliente"><?php echo $direccion; ?></td>
                </tr>
                <tr>
                   <th>Celular cliente:</th>
                   <td colspan="2" class="carrito-celular-cliente"><?php echo $movil; ?></td>
                </tr>
                <tr>
                   <th>Tipo evento:</th>
                   <td colspan="2"><span class="carrito-tipo-evento"><?php echo $key->tipo_evento ?></span></td>
                </tr>
                <tr>
                   <th>Nombre evento:</th>
                   <td colspan="2"><span class="carrito-nombre-evento"><?php echo $key->nombre_evento ?></span></td>
                </tr>
                <tr>
                    <th>Fecha evento:</th>
                    <td colspan="2"><span class="carrito-fecha-evento"><?php echo $key->fecha_evento ?></span></td>
                </tr>
                <tr>
                    <th>Numero de invitados</th>
                    <td colspan="2"><span class="carrito-total-invitados"><?php echo $key->numeo_invitados ?></span></td>
                </tr>
            <?php endforeach ?>
                <tr>
                    <th>Nombre Producto</th>
                    <th>Comentario</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <h3>Total:</h3>
                    </td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>