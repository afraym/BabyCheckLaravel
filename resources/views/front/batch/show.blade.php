@extends('layouts.front')

@section('content')
<style>
@media print {
  body * { visibility: hidden !important; }
  #qrPrintWrapper, #qrPrintWrapper * { visibility: visible !important; }
  #qrPrintWrapper { position: fixed; top:0; left:0; width:100%; text-align:center; }
}
</style>
<div class="container mt-5 text-center">
    <h2>{{ $batch->batch_code }}</h2>
    <p>{{ __('admin.lot_number') }}: {{ $batch->lot_number }}</p>
    <p>{{ __('admin.expiry_date') }}: {{ $batch->expiry_date }}</p>
    @if($batch->latestQrCode)
        <div id="qrPrintWrapper">
            <img id="qrImage" src="{{ asset('storage/'.$batch->latestQrCode->qr_code) }}" alt="QR Code" style="max-width:300px;">
        </div>
        <br class="my-3">
        <a href="{{ asset('storage/'.$batch->latestQrCode->qr_code) }}"
           download="batch_{{ $batch->batch_code }}_qr.png"
           class="btn btn-success btn-sm">
            {{ __('admin.download_qr') }}
        </a>
        <button type="button" id="printBtn" class="btn btn-info btn-sm">
            {{ __('admin.print_qr') }}
        </button>
    @endif
    <br><br>
    <a href="{{ route('batches.index') }}" class="btn btn-secondary btn-sm">{{ __('admin.back') }}</a>
</div>

<script>
(function(){
  const btn = document.getElementById('printBtn');
  if(!btn) return;
  btn.addEventListener('click', () => window.print());
})();
</script>
@endsection