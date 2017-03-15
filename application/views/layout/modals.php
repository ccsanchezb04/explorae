<div class="modal fade bs-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>login">
                <div class="form-group">
                    <label for="no_identificacion" class="col-sm-4 control-label">No. Identificacion:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="id" id="no_identificacion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Contraseña:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-6">
                        <button type="submit" class="btn btn-success">Entrar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <p class="text-danger">Explora Eventos © 2014 - Todos los derechos reservados</p>
        </div>
    </div>
  </div>
</div>


<!--modal para añadir a carrito-->
<div class="cart-view-modal">
    <div class="content-modal-cart">
       <h3 class="text-inline-block ">Carrito de cotización</h3>
       <hr class="hr">
       <div class="row">
          <div class="col-md-12">
          <table class="table table-bordered ">
          <thead>
            <tr>
              <th colspan="4"><h4>Cotización N# <span class="num_cotirzacion">#</span></h4></th>
            </tr>
            <tr>
              <td colspan="4"><b>Fecha cotización:</b> <span class="fecha-cotizacion"><?php echo date('Y-m-d'); ?></span></td>
            </tr>
            <tr>
               <th>Nombre cliente:</th>
               <td colspan="3" class="carrito-nombre-cliente">-----</td>
            </tr>
            <tr>
               <th>Dirección cliente:</th>
               <td colspan="3" class="carrito-direccion-cliente">-----</td>
            </tr>
            <tr>
               <th>Celular cliente:</th>
               <td colspan="3" class="carrito-celular-cliente">-----</td>
            </tr>
            <tr>
               <th>Tipo evento:</th>
               <td colspan="3"><span class="carrito-tipo-evento">-----</span></td>
            </tr>
            <tr>
               <th>Nombre evento:</th>
               <td colspan="3"><span class="carrito-nombre-evento">-----</span></td>
            </tr>
            <tr>
               <th>Fecha evento:</th>
               <td colspan="3"><span class="carrito-fecha-evento">-----</span></td>
            </tr>
            <tr>
               <th>Número de invitados:</th>
               <td colspan="3"><span class="carrito-cantidad-evento">-----</span></td>
            </tr>
          </thead>
          </table>
          <table class="table table-bordered ">
          <thead>
            <tr>
              <th colspan="8">Productos</th>
            </tr>
            <tr>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Tipo</th>
              <th>Comentario</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Quitar</th>
            </tr>
          </thead>
          <tbody class="carrito-cotizacion">
            <!--
            <tr>
              <th class="cart-view-imagen-parent">
                <img class="cart-view-imagen" src="" alt="">
              </th>
              <td><span class="cart-name-product">Ramo tal</span></td>
              <td><span class="cart-tipo-product">Rojo</span></td>
              <td>$<span class="cart-precio-product">000000</span></td>
              <td><span class="cart-cantidad-product">999</span></td>
              <td>$<span class="cart-subtotal-subtotal">0000000</span></td>
              <td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button></td>
            </tr>
            -->
          </tbody>
          <tfoot>
            <tr>
              <th colspan="6"><span class="pull-right">Total cotización:</span></th>
              <td>$<span class="total-cotizacion">0000000</span></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
        </div>
       </div>
       <hr>
       <div class="btn-group pull-right" role="group" >
        <button class="btn btn-danger btn-sm cancelar-view-cart"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <button class="btn btn-success btn-sm save-cotizacion"><span class="glyphicon glyphicon-ok"></span> Guardar cotización</button>
        </div>
       <div class="clear"></div>
    </div>
</div>

<div class="cart-add-modal">
    <div class="content-modal-cart">
       <h3 class="text-inline-block add-nombre-producto">Producto tal</h3>
       <h4 class="precio-cart-add pull-right text-inline-block text-primary add-precio-producto">Precio: $<span>$$$$</span></h4>
       <hr class="hr">
       <div class="row">
           <div class="col-md-4">
               <div class="imagen">
                <img class="img-cart-add add-imagen-producto" src="" alt="">
               </div>
            </div>
           <div class="col-md-8">
               <div class="contenido row">
                  <div class="col-md-4">
                     <label for="">Caracteristica:</label>
                     <div class="caracteristicas cat-cart-add">
                         
                     </div>
                     <div class="alert-cart-add">
                       Especificar en el comentario.
                     </div>
                  </div>
                  <div class="col-md-8">
                    <label for="">Cantidad:</label>
                    <input class="form-control cantidad-cart-add" type="number" min="1" max="9999" value="1" placeholder="Cantidad">
                    <label for="">Comentario:</label>
                    <textarea name="" id="" cols="" rows="" placeholder="Comentario" class="resize-none form-control comentario-cart-add"></textarea>
                  </div>
               </div>
           </div>
       </div>
        <input type="hidden" class="id-cart-add">
        <input type="hidden" class="nombre-cart-add">
        <input type="hidden" class="precio-cart-add">
        <input type="hidden" class="tipo-cart-add">
        <input type="hidden" class="pro-cart-add">
        <input type="hidden" class="cat-cart-add">
        <input type="hidden" class="img-cart-add">
       <hr>
       <div class="add-warning-cart">Producto ya ha sido agregado.</div>
       <div class="btn-group pull-right" role="group" >
         <button class="btn btn-danger btn-sm cancelar-add-cart"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <button class="btn btn-success btn-sm add-item-cart"><span class="glyphicon glyphicon-shopping-cart"></span> Agregar</button>
        </div>
       <div class="clear"></div>
    </div>
</div>

<!--modal para añadir a carrito-->
<div class="alert-view-modal">
    <div class="content-modal-alert">
       <h4 class="text-inline-block ">Guadando cotización</h4>
       <br>
       <br>
       <div class="spinner_content">
        <svg class="spinner" width="50px" height="50px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
         <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
        </svg>
      </div>
      <div class="tick_content">
        <svg id="Layer_1" width="50px" height="50px" viewBox="0 0 90.594 59.714" enable-background="new 0 0 90.594 59.714" xml:space="preserve"><polyline class="check" fill="none" stroke="#4285F4" stroke-width="8" stroke-miterlimit="10" points="1.768,23.532 34.415,56.179 88.826,1.768"/></svg>
      </div>
    </div>
</div>













