<div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPayment" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered dialog-pagos" role="document">
    <div class="modal-content">
      <div class="modal-header header-pagos">
        <h5 class="modal-title" id="modalPayment">Escoja su opción de pago.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body-pagos d-flex flex-row bd-highlight mb-1 mt-1">
        <a data-dismiss="modal" data-toggle="modal" href="#bdvModal"><img src="{{ asset('img/bdv_logo.jpg') }}" alt="bdv" class="rounded m-1 btn-pay"></a>
        <a href="#"><img src="{{ asset('img/mercantil_logo.png') }}" alt="mercantil" class="rounded m-1 btn-pay"></a>
        <a href="#"><img src="{{ asset('img/bbva_logo.png') }}" alt="bbva" class="rounded m-1 btn-pay"></a>
        <a href="#"><img src="{{ asset('img/logo_sofitasa1.png') }}" alt="sofitasa" class="rounded m-1 btn-pay"></a>
      </div>
      <div class="modal-body-pagos d-flex flex-row bd-highlight mb-3 justify-content-around">
        <a href="#"><img src="{{ asset('img/Banesco_logo1.png') }}" alt="banesco" class="rounded m-2 btn-pay"></a>        
        <a href="#"><img src="{{ asset('img/logo-bt.png') }}" alt="bt" class="rounded m-2 btn-pay"></a>       
        <a href="#"><img src="{{ asset('img/logo_bod.png') }}" alt="bod" class="rounded mt-2 btn-pay"></a> 
      </div>
    </div>
  </div>
</div>