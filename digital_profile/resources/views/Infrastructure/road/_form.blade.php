<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($road) && $road->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($road) && $road->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($road) && $road->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($road) && $road->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($road) && $road->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($road) && $road->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($road) && $road->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($road) && $road->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($road) && $road->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($road) && $road->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($road) && $road->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-2 mt-2 text-right">
        <label for="name">सडकको नाम</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="name" id="name" class="form-control" placeholder="सडकको नाम" @if(isset($road)) value="{{ $road->name }}" @endif required>
    </div>

    <div class="col-2 mt-2 text-right">
        <label for="from">देखि</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="from" placeholder="देखि"  name="from" @if(isset($road)) value="{{ $road->from }}" @endif required>
    </div>

    <div class="col-2 mt-2 text-right">
        <label for="to">सम्म</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="to" placeholder="सम्म"  name="to" @if(isset($road)) value="{{ $road->to }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-2 mt-2 text-right">
        <label for="length">लम्बाई(कि. मि.)</label>
    </div>
    <div class="col-2">
        <input type="number" name="length" id="length" class="form-control" placeholder="लम्बाई(कि. मि.)" min="1" @if(isset($road)) value="{{ $road->length }}" @endif step = ".01" required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="type">प्रकार</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="type" id="type" class="form-control" placeholder="प्रकार" min="1" @if(isset($road)) value="{{ $road->type }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="population">लाभान्वित जनसंख्या</label>
    </div>
    <div class="col-2">
        <input type="number" name="population" id="population" class="form-control" placeholder="लाभान्वित जनसंख्या" min="1" @if(isset($road)) value="{{ $road->population }}" @endif required>
    </div>
</div>
<hr>

<div class="row"></div>
    <div class="col-12">
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-md"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
        </div>
    </div>
</div>

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>
@endsection
