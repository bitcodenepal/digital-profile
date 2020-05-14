<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($forest) && $forest->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($forest) && $forest->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($forest) && $forest->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($forest) && $forest->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($forest) && $forest->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($forest) && $forest->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($forest) && $forest->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($forest) && $forest->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($forest) && $forest->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($forest) && $forest->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($forest) && $forest->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="name">वनको नाम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="वनको नाम"  name="name" min="0" @if(isset($forest)) value="{{ $forest->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="area">क्षेत्रफल (हे.)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="area" placeholder="क्षेत्रफल (हे.)"  name="area" min="0" step=".01" @if(isset($forest)) value="{{ $forest->area }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="type">वनको किसिम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="type" id="type" class="form-control">
            <option value="सामुदायिक" {{ (isset($forest) && $forest->type == "सामुदायिक") ? "selected" : "" }}>सामुदायिक</option>
            <option value="साझेदारी" {{ (isset($forest) && $forest->type == "साझेदारी") ? "selected" : "" }}>साझेदारी</option>
            <option value="निजी" {{ (isset($forest) && $forest->type == "निजी") ? "selected" : "" }}>निजी</option>
            <option value="राष्ट्रिय र सरकारी" {{ (isset($forest) && $forest->type == "राष्ट्रिय र सरकारी") ? "selected" : "" }}>राष्ट्रिय र सरकारी</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="houses">समेटेको घरधुरी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="houses" placeholder="समेटेको घरधुरी"  name="houses" min="0" @if(isset($forest)) value="{{ $forest->houses }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="wood">काठ (क्यू. फि.)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="wood" placeholder="काठ (क्यू. फि.)"  name="wood" min="0" @if(isset($forest)) value="{{ $forest->wood }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="firewood">दाउरा (भारी)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="firewood" placeholder="दाउरा (भारी)"  name="firewood" min="0" @if(isset($forest)) value="{{ $forest->firewood }}" @endif required>
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
