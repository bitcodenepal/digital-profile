<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-3 text-right mt-2">
        <label for="name">आयात/निर्यात हुने प्रमुख वस्तु</label>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="आयात/निर्यात हुने प्रमुख वस्तु"  name="name" min="0" @if(isset($trade)) value="{{ $trade->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="quantity">इकाई</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="quantity" id="quantity" class="form-control">
            <option value="मेट्रिक टन" {{ (isset($trade) && $trade->quantity == "मेट्रिक टन") ? "selected" : "" }}>मेट्रिक टन</option>
            <option value="क्विन्टल" {{ (isset($trade) && $trade->quantity == "क्विन्टल") ? "selected" : "" }}>क्विन्टल</option>
            <option value="किलोग्राम" {{ (isset($trade) && $trade->quantity == "किलोग्राम") ? "selected" : "" }}>किलोग्राम</option>
            <option value="लिटर" {{ (isset($trade) && $trade->quantity == "लिटर") ? "selected" : "" }}>लिटर</option>
            <option value="क्यारेट" {{ (isset($trade) && $trade->quantity == "क्यारेट") ? "selected" : "" }}>क्यारेट</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-3 text-right mt-2">
        <label for="import">नपा भित्र आयात परिमाण</label>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <input type="number" class="form-control" id="import" placeholder="नपा भित्र आयात परिमाण"  name="import" min="0" step=".01" @if(isset($trade)) value="{{ $trade->import }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-3 text-right mt-2">
        <label for="export">नपाबाट निर्यात हुने परिमाण</label>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <input type="number" class="form-control" id="export" placeholder="नपाबाट निर्यात हुने परिमाण"  name="export" min="0" step=".01" @if(isset($trade)) value="{{ $trade->export }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>


@section('custom-scripts')
    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>
@endsection