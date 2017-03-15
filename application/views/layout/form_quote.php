<div class="modal fade bs-example-modal-lg" id="form-quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Datos Cotización</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" id="form-quote" role="form" method="post" onsubmit="return false;">
                <div class="form-group">
                    <label for="ident-cliente" class="col-sm-4 control-label">Identificacion Cliente</label>
                    <div class="col-sm-6">
                        <input type="search" class="form-control" name="no_documento" id="ident-cliente">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Nombre del cliente:</label>
                    <div class="col-sm-6">
                        <input type="text" readonly="" class="form-control" name="nombre" id="nombre-cliente">
                        <input type="hidden" readonly="" class="form-control" name="direccion" id="direccion-cliente">
                        <input type="hidden" readonly="" class="form-control" name="celular" id="celular-cliente">
                        <input type="hidden" readonly="" class="form-control" name="doc" id="doc-cliente">
                        <input type="hidden" readonly="" class="form-control" name="id" id="id-cliente">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cantidad" class="col-sm-4 control-label">Cantidad de personas:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="cantidad" id="cantidad">
                    </div>
                </div>
                <div class="form-group">
                    <label for="evento" class="col-sm-4 control-label">Tipo de evento:</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" name="evento" value="social" class="evento"><label class="control-label control-label-name"> Social</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="evento" value="empresarial" class="evento"><label class="control-label control-label-name"> Empresarial</label>
                            </div>
                            <input type="hidden" readonly="" class="form-control" name="tipo" id="tipo-evento">                            
                        </div>
                    </div>
                </div>
                <div class="form-group" id="tipo-evento">
                    <div class="col-sm-offset-4 col-sm-6" id="tipoEvento">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha-evento" class="col-sm-4 control-label">Fecha del Evento:</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="fecha_evento" id="fecha-evento">
                        <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
                        <input type="hidden" name="id_cliente" id="id_cliente" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-6">
                        <button type="submit" class="btn btn-success enviar-cliente">Enviar</button>
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