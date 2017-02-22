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
                    <strong>  $<?php echo $monto?></strong>
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
                  <h4> Concepto</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                <h4>  <?php echo $usuario?></h4>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-5 col-xl-8 col-lg-offset-2
                  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                    <h4> Fechas de pago</h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xl-3 azu2">
                  <h4>  20 de Febrero al 06 de Marzo</h4>
                  </div>
                </div>
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
