<div class="modal fade bs-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>Login">
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