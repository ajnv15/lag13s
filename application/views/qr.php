

      <div class="tab-pane fade"  id="qr">
        <script>
        function enviarcodigo(){
          $.ajax({
            url:'<?php echo base_url()."index.php/bot/sendimage";?>'
          })
        }
        </script>
        <div class="modalfade">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="modal-header">
                <h3 class="modal-title">Código QR</h3>
              </div>
              <div class="modal-body">
              <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-8 col-xl-8 col-lg-offset-2
                col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <h4>Necesitas realizar tu pago para descargar tu código QR</h4>
              </div>
              </div>
              <div class="modal-footer">
              <div class="row">
                <div class="col-lg-6 col-md-16 col-sm-6 col-xs-6 col-xl-6 col-lg-offset-3
                col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                <button type="button" class="btn btn-primary" onclick="enviarcodigo();">Enviar por telegram</button>
              </div>
            </div>
          </div>
          </div>
            </div>
          </div>
        </div>
    </div>
