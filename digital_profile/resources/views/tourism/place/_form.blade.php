<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="name">स्थलको नाम</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="स्थलको नाम"  name="name" min="0" @if(isset($place)) value="{{ $place->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($place) && $place->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($place) && $place->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($place) && $place->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($place) && $place->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($place) && $place->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($place) && $place->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($place) && $place->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($place) && $place->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($place) && $place->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($place) && $place->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($place) && $place->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="availability">सडकको पहुँच</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="availability" id="availability" class="form-control">
            <option value="पुगेको छ" {{ (isset($place) && $place->availability == "पुगेको छ") ? "selected" : "" }}>पुगेको छ</option>
            <option value="पुगेको छैन" {{ (isset($place) && $place->availability == "पुगेको छैन") ? "selected" : "" }}>पुगेको छैन</option>
        </select>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="distance">नजिकको बजार सम्मको दुरी (किमी)</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <input type="number" class="form-control" id="distance" placeholder="नजिकको बजार सम्मको दुरी (किमी)" name="distance" min="0" @if(isset($place)) value="{{ $place->distance }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="allocation">स्वामित्व</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="allocation" id="allocation" class="form-control">
            <option value="सामुदायिक" {{ (isset($place) && $place->allocation == "सामुदायिक") ? "selected" : "" }}>सामुदायिक</option>
            <option value="सार्वजनिक" {{ (isset($place) && $place->allocation == "सार्वजनिक") ? "selected" : "" }}>सार्वजनिक</option>
        </select>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="importance">विशेषता</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="importance" id="importance" class="form-control">
            <option value="धार्मिक" {{ (isset($place) && $place->importance == "धार्मिक") ? "selected" : "" }}>धार्मिक</option>
            <option value="ऐतिहासिक" {{ (isset($place) && $place->importance == "ऐतिहासिक") ? "selected" : "" }}>ऐतिहासिक</option>
            <option value="पर्यटकीय" {{ (isset($place) && $place->importance == "पर्यटकीय") ? "selected" : "" }}>पर्यटकीय</option>
        </select>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="economy">वार्षिक पर्यटक आगमन संख्या</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <input type="number" class="form-control" id="economy" placeholder="वार्षिक पर्यटक आगमन संख्या"  name="economy" min="0" @if(isset($place)) value="{{ $place->economy }}" @endif required>
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
