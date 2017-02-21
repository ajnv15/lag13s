<div class="tab-pane active" >

  <div class="modal-content">

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-xl-offset-2">
      <div class="panel animated ">
        <div class="modal-header">
          <h3 class="modal-title">Telegram</h3>
        </div>
        <div class="modal-body">

            <form method="post" action="<?php echo site_url("bot/postmensajes");?>">

              <div class="form-group">
                <label for="mensaje"></label>
                <textarea  class="form-control" name="mensaje" rows="8" cols="80" id="mensaje" placeholder="Ingresa el mensaje que se enviara a todos los usuarios"></textarea>
                <input type="text" class="form-control" name="code" value="" placeholder="ingresa el codigo para enviar mensajes">
                <button class="btn btn-primary"> Enviar</button>
              </div>
            </form>

        </div>

          <div class="modal-footer">

          </div>

      </div>
    </div>
  </div>
</div>
