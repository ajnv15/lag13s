<style>

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: black;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
  opacity: 0.8
}

.container:hover .overlay {
  width: 70%;
}

.text {
  white-space: nowrap;
  color: white;
  font-size: 12px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>

      <div class="tab-pane fade"  id="telegram">
        <div class="modal-content">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="modal-header">
                <h3 class="modal-title">Telegram</h3>
              </div>
              <div class="modal-body">

                  <div class="row"><!--Instrucciones de instalación de telegram-->
                  <div class="container">


                  <div class="col-lg-4">
                    <img class="image-responsive" src="<?php echo base_url()."/assets/images/playstore.jpg";?>" alt="">
                    <div class="overlay">
                      <div class="text">Descargar Telegram</div>
                  </div>
                  </div>
                  <div class="col-lg-3">
                    <strong>Abre Play Store, busca la aplicación Telegram en el buscador y haz clic en Instalar: </strong>
                  </div>
                  </div>
                </div><!--tercer row-->

                <div class="row">
                  <div class="container">

                  <div class="col-lg-4">
                    <img class="image-responsive" src="<?php echo base_url()."/assets/images/empezar.jpg";?>" alt="">
                    <div class="overlay">
                      <div class="text">Instalación de Telegram</div>
                  </div>
                  </div>
                  <div class="col-lg-3">
                    <strong>Luego de la instalación, pulsa el botón Empieza a conversar: </strong>
                  </div>
                  </div>
                </div><!--cuarto row-->

              <div class="row">
                <div class="container">

                <div class="col-lg-4">
                  <img class="image-responsive" src="<?php echo base_url()."/assets/images/ingresarnum.jpg";?>" alt="">
                  <div class="overlay">
                    <div class="text">Ingresa tu teléfono</div>
                </div>
                </div>
                <div class="col-lg-3">
                  <strong>En la ventana que aparece, ingresa tu número de teléfono: </strong>
                </div>
                </div>
              </div><!--quinto row-->

            <div class="row">
              <div class="container">

              <div class="col-lg-4">
                <img class="image-responsive" src="<?php echo base_url()."/assets/images/codigo.jpg";?>" alt="">
                <div class="overlay">
                  <div class="text">Ingresa tu código de verificación</div>
              </div>
              </div>
              <div class="col-lg-3">
                <strong>Ingresa el código enviado a tu teléfono:  </strong>
              </div>
              </div>
            </div><!--sexto row-->


          <div class="row">
            <div class="container">
            <div class="col-lg-4">
              <img class="image-responsive" src="<?php echo base_url()."/assets/images/nombre.jpg";?>" alt="">
              <div class="overlay">
                <div class="text">Ingresa tu nombre</div>
            </div>
            </div>
            <div class="col-lg-3">
              <strong>Ingresa tu nombre y si deseas también tu apellido:  </strong>
            </div>
            </div>
          </div><!--septimo row-->

          <div class="row">
            <div class="container">


            <div class="col-lg-4">
              <img class="image-responsive" src="<?php echo base_url()."/assets/images/bot.jpg";?>" alt="">
              <div class="overlay">
                <div class="text">Al hacer click sobre nuestro bot se abrirá la ventana de chat</div>
            </div>
            </div>
            <div class="col-lg-3">
              <strong>Busca el Bot con el nombre "semana13LAGBot"</strong>
            </div>
            </div>
          </div><!--row-->



          <div class="row">
            <div class="container">


            <div class="col-lg-4">
              <img class="image-responsive" src="<?php echo base_url()."/assets/images/ini.jpg";?>" alt="">
              <div class="overlay">
                <div class="text">Hello World</div>
            </div>
            </div>
            <div class="col-lg-3">
              <strong>Selecciona el bot y da click en la parte inferior en Iniciar</strong>
            </div>
            </div>
          </div><!--segundo row-->

          <div class="row">
                            <div class="container">


                            <div class="col-lg-5 col-sm-6 ">
                              <h2 class="azul"<?echo $unique_code;?></h2>
                              <div class="overlay">
                                <div class="text">Después de enviar este codigo recibiras un mensaje de confirmación</div>
                            </div>
                            </div>
                            <div class="col-lg-3 ">
                              <strong>Envía este código y recibiras un mensaje</strong>
                            </div>
                            </div>
                          </div>



              </div>

                <div class="modal-footer">

                </div>

            </div>
          </div>



        </div>
    </div>
