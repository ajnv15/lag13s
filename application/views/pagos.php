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

      <div class="tab-pane active"  id="pagos">
        <div class="modalfade">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-xl-offset-2">
            <div class="panel animated fadeInDown">
              <div class="panel-heading">
                <h3 class="panel-title azul">Pagos</h3>
                </div>
                  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8">
                      <strong> Total de pagos</strong>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-4">
                    <strong>  $"variable"</strong>
                    </div>
                </div>
                  <br></br>
                  <br></br>
                  <div id="visible">
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xl-2">
                  <h4>Banco</h4>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-4">
                  <h4 class="azul">Bancomer</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xl-2">
                  <h4 class="azul">Referencia</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xl-2">
                  <h4 class="azul">1266658</h4>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xl-8">
                  <h4> Concepto</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-4">
                <h4>  $"variable"</h4>
                </div>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-offset-5">
              <button class="btn-primary" onclick="window.print();">Imprimir Referencia</button>
            </div>
          </div>
            </div>
          </div>
        </div>
    </div>
