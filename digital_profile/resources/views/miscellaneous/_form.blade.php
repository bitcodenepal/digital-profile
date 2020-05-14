<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="name">स्थलको नाम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="स्थलको नाम"  name="name" min="0" @if(isset($miscellaneous)) value="{{ $miscellaneous->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($miscellaneous) && $miscellaneous->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="usage">उपयोग</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="usage" id="usage" class="form-control">
            <option value="खेलकुद" {{ (isset($miscellaneous) && $miscellaneous->usage == "खेलकुद") ? "selected" : "" }}>खेलकुद</option>
            <option value="मनोरंजन" {{ (isset($miscellaneous) && $miscellaneous->usage == "मनोरंजन") ? "selected" : "" }}>मनोरंजन</option>
            <option value="पिकनिक" {{ (isset($miscellaneous) && $miscellaneous->usage == "पिकनिक") ? "selected" : "" }}>पिकनिक</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="area">क्षेत्रफल (वर्ग कि. मी.)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="area" placeholder="क्षेत्रफल (वर्ग कि. मी.)"  name="area" min="0" @if(isset($miscellaneous)) value="{{ $miscellaneous->area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="allocation">स्वामित्व</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="allocation" id="allocation" class="form-control">
            <option value="सरकारी" {{ (isset($miscellaneous) && $miscellaneous->allocation == "सरकारी") ? "selected" : "" }}>सरकारी</option>
            <option value="सार्वजनिक" {{ (isset($miscellaneous) && $miscellaneous->allocation == "सार्वजनिक") ? "selected" : "" }}>सार्वजनिक</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="economy">आम्दानी (वार्षिक रु)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="economy" placeholder="आम्दानी (वार्षिक रु)"  name="economy" min="0" @if(isset($miscellaneous)) value="{{ $miscellaneous->economy }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="clients">सेवाग्राही/आगन्तुक संख्या (वार्षिक)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="clients" placeholder="सेवाग्राही/आगन्तुक संख्या (वार्षिक)"  name="clients" min="0" @if(isset($miscellaneous)) value="{{ $miscellaneous->clients }}" @endif required>
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
