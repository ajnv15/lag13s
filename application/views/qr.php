<script>
function enviarcodigo(){
  $.ajax({
    url:<?php echo base_url()."index.php/bot/sendimage";?>
  });
}
</script>

      <div class="tab-pane"  id="qr">
        <div class="modalfade">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="panel-heading">
                <h3 class="panel-title">Código QR</h3>
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col-lg-offset-2">
                <h4>Necesitas realizar tu pago para descargar tu código QR</h4>
              </div>
              </div>
              <div class="row">
                <div class="col-lg-offset-5">
                <button type="button" class="btn btn-primary" onclick="enviarcodigo;">Enviar por telegram</button>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
