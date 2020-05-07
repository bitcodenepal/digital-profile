<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($occupation) && $occupation->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($occupation) && $occupation->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($occupation) && $occupation->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($occupation) && $occupation->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($occupation) && $occupation->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($occupation) && $occupation->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($occupation) && $occupation->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($occupation) && $occupation->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($occupation) && $occupation->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($occupation) && $occupation->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($occupation) && $occupation->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="agriculture">कृषि तथा पशुपालन</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="agriculture" placeholder="जनसंख्या लेख्नुहोस्"  name="agriculture" min="0" @if(isset($occupation)) value="{{ $occupation->agriculture }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="job">नोकरी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="job" placeholder="जनसंख्या लेख्नुहोस्"  name="job" min="0" @if(isset($occupation)) value="{{ $occupation->job }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="business">उद्योग/व्यापार</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="business" placeholder="जनसंख्या लेख्नुहोस्"  name="business" min="0" @if(isset($occupation)) value="{{ $occupation->business }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="labor">ज्याला/मजदुरी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="labor" placeholder="जनसंख्या लेख्नुहोस्"  name="labor" min="0" @if(isset($occupation)) value="{{ $occupation->labor }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="agency">व्यवासायिक कार्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="agency" placeholder="जनसंख्या लेख्नुहोस्"  name="agency" min="0" @if(isset($occupation)) value="{{ $occupation->agency }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="foreign">वैदेशिक रोजगार</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="foreign" placeholder="जनसंख्या लेख्नुहोस्"  name="foreign" min="0" @if(isset($occupation)) value="{{ $occupation->foreign }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="student">विद्यार्थी (अध्ययनरत)</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="student" placeholder="जनसंख्या लेख्नुहोस्"  name="student" min="0" @if(isset($occupation)) value="{{ $occupation->student }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="housewives">गृहणी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="housewives" placeholder="जनसंख्या लेख्नुहोस्"  name="housewives" min="0" @if(isset($occupation)) value="{{ $occupation->housewives }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="unemployed">बेरोजगार</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="unemployed" placeholder="जनसंख्या लेख्नुहोस्"  name="unemployed" min="0" @if(isset($occupation)) value="{{ $occupation->unemployed }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="early">कम उमेर</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="early" placeholder="जनसंख्या लेख्नुहोस्"  name="early" min="0" @if(isset($occupation)) value="{{ $occupation->early }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="others" placeholder="जनसंख्या लेख्नुहोस्"  name="others" min="0" @if(isset($occupation)) value="{{ $occupation->others }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="not_included">उल्लेख नभएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="not_included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($occupation)) value="{{ $occupation->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
