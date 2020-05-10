<div class="form-group row">
    <div class="col-2 text-right mt-2">
        <label for="name">सिंचाइ सुबिधा वा आयोजनाको नाम</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="सिंचाइ सुबिधा वा आयोजनाको नाम"  name="name" min="0" @if(isset($irrigation)) value="{{ $irrigation->name }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर</label>
    </div>
    <div class="col-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($irrigation) && $irrigation->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($irrigation) && $irrigation->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($irrigation) && $irrigation->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($irrigation) && $irrigation->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($irrigation) && $irrigation->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($irrigation) && $irrigation->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($irrigation) && $irrigation->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($irrigation) && $irrigation->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($irrigation) && $irrigation->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($irrigation) && $irrigation->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($irrigation) && $irrigation->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="type">सिंचाइको किसिम</label>
    </div>
    <div class="col-2">
        <select name="type" id="type" class="form-control">
            <option value="कुलो" {{ (isset($irrigation) && $irrigation->type == "कुलो") ? "selected" : "" }}>कुलो</option>
            <option value="पाईप" {{ (isset($irrigation) && $irrigation->type == "पाईप") ? "selected" : "" }}>पाईप</option>
            <option value="नहर" {{ (isset($irrigation) && $irrigation->type == "नहर") ? "selected" : "" }}>नहर</option>
        </select>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-2 text-right mt-2">
        <label for="unit">स्रोतको इकाई</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="unit" placeholder="स्रोतको इकाई"  name="unit" min="0" @if(isset($irrigation)) value="{{ $irrigation->unit }}" @endif required>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="quantity">स्रोतको परिमाण</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="quantity" placeholder="स्रोतको परिमाण"  name="quantity" min="0" @if(isset($irrigation)) value="{{ $irrigation->quantity }}" @endif required>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="availability">सिंचाइको उपलब्धता</label>
    </div>
    <div class="col-2">
        <select name="availability" id="availability" class="form-control">
            <option value="वर्षभरी" {{ (isset($irrigation) && $irrigation->availability == "वर्षभरी") ? "selected" : "" }}>वर्षभरी</option>
            <option value="मौसमी" {{ (isset($irrigation) && $irrigation->availability == "मौसमी") ? "selected" : "" }}>मौसमी</option>
        </select>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-2 text-right mt-2">
        <label for="beneficial">लाभान्वित घरधुरी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="beneficial" placeholder="लाभान्वित घरधुरी"  name="beneficial" min="0" @if(isset($irrigation)) value="{{ $irrigation->beneficial }}" @endif required>
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
