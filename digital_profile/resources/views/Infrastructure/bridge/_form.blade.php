<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($bridge) && $bridge->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($bridge) && $bridge->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($bridge) && $bridge->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($bridge) && $bridge->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($bridge) && $bridge->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($bridge) && $bridge->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($bridge) && $bridge->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($bridge) && $bridge->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($bridge) && $bridge->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($bridge) && $bridge->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($bridge) && $bridge->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-2 mt-2 text-right">
        <label for="name">पुल्को नाम</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="name" id="name" class="form-control" placeholder="पुल्को नाम" @if(isset($bridge)) value="{{ $bridge->name }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="river">पुल भएको नदीको नाम</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="river" id="river" class="form-control" placeholder="पुल भएको नदीको नाम" @if(isset($bridge)) value="{{ $bridge->river }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="date">निर्मित साल</label>
    </div>
    <div class="col-2">
        <input type="number" name="date" id="date" class="form-control" placeholder="निर्मित साल" min="0" @if(isset($bridge)) value="{{ $bridge->date }}" @endif pattern="[0-9]{4}" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-2 mt-2 text-right">
        <label for="from">देखि</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="from" placeholder="देखि"  name="from" @if(isset($bridge)) value="{{ $bridge->from }}" @endif required>
    </div>

    <div class="col-2 mt-2 text-right">
        <label for="to">सम्म</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="to" placeholder="सम्म"  name="to" @if(isset($bridge)) value="{{ $bridge->to }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="length">लम्बाई(मि.)</label>
    </div>
    <div class="col-2">
        <input type="number" name="length" id="length" class="form-control" placeholder="लम्बाई(मि.)" min="0" @if(isset($bridge)) value="{{ $bridge->length }}" @endif step = ".01" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-2 mt-2 text-right">
        <label for="type">प्रकार</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="type" id="type" class="form-control" placeholder="प्रकार" min="0" @if(isset($bridge)) value="{{ $bridge->type }}" @endif required>
    </div>
    <div class="col-2 mt-2 text-right">
        <label for="condition">अवस्था</label>
    </div>
    <div class="col-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="condition" id="condition" class="form-control" placeholder="अवस्था" min="0" @if(isset($bridge)) value="{{ $bridge->condition }}" @endif required>
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
