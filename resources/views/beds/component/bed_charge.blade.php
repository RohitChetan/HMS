<div class="d-flex justify-content-end pe-25">
    @if(!Empty($row->charge))
        {{ checkNumberFormat($row->charge, strtoupper(getCurrentCurrency())) }}
    @else
        {{ __('messages.common.n/a') }}
    @endif
</div>
