    <style>
      .azul{
        color:blue !important;
      }
      @print{
        #visible{
          visibility: visible;
        }
        body *{
          visibility:hidden;
        }
        button *{
          visibility: hidden;
        }
      }


    </style>
    <script>
    function printDiv(imprimir) {
         var printContents = document.getElementById("imprimir").innerHTML;
         var originalContents = document.body.innerHTML;
         printContents=printContents.replace("<h4>","");
         printContents=printContents.replace("</h4>","");
         printContents=printContents.replace("<h3>","");
         printContents=printContents.replace("</h3>","");
         document.body.innerHTML = printContents;
         window.print();
         document.body.innerHTML = originalContents;
    }

    </script>


      <div class="tab-pane fade in active"  id="pagos">
        <div class="modalfade">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="modal-header">
                <h3 class="modal-title">Pagos</h3>
                </div>
                  <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-8 col-lg-offset-1
                    col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                      <strong> Total de pagos</strong>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1 col-xl-3">

                    <strong>  $<?php echo $monto;?></strong>

                    </div>
                </div>
                  <br></br>
                  <br></br>
                  <div id="imprimir">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-4 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                  <h4>Banco</h4>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-4">
                  <h4 class="azul">Bancomer</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                  <h4 >Número de cuenta </h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
                  <h4 class="azul">007447870455236983</h4>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h4 >Clave Interbancario </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
                <h4 class="azul">012700004552369839</h4>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
              col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
              <h4 >Número de tarjeta</h4>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
              <h4 class="azul">4152313275159072</h4>
              </div>
          </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                  <h4> Concepto</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">

                <h4><?php echo $concepto;?></h4>



                </div>
                <?php if($this->session->userdata('tipousuario')=="interno"){
                  ?>


                <div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                    <h4> Fechas de Pago</h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                  <h4>  Monto a Pagar</h4>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                    <h4> 20 de Febrero al 17 de Marzo</h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                  <h4> $500.00</h4>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                    <h4> 18 de Marzo al 17 de Abril</h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                  <h4> $580.00</h4>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                    <h4> 18 de Abril al 30 de Abril</h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                  <h4> $650.00</h4>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if($this->session->userdata('tipousuario')=="externo"){
              ?>


            <div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
              col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h4> Fechas de Pago</h4>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
              <h4>  Monto a Pagar</h4>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
              col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h4> Pago por 3 días </h4>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
              <h4> $650.00</h4>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
              col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                <h4> Pago por conferencia</h4>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
              <h4> $250.00</h4>
              </div>
            </div>
          </div>
          <?php } ?>

            </div>
          </div>
          </div>
          <div class="modal-footer">

              <div>
              <button class="btn btn-primary" onclick="printDiv(imprimir)">Imprimir Referencia</button>
            </div>

        </div>
            </div>
          </div>
        </div>
    </div>
