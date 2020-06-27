<div class="form-group row">
    <div class="col-12 col-sm-4 c0l-md-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-12 col-sm-8 c0l-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($literacy) && $literacy->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($literacy) && $literacy->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($literacy) && $literacy->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($literacy) && $literacy->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($literacy) && $literacy->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($literacy) && $literacy->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($literacy) && $literacy->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($literacy) && $literacy->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($literacy) && $literacy->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($literacy) && $literacy->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($literacy) && $literacy->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6 text-center">
        साक्षरताको स्थिति
    </div>
    <div class="col-12 col-sm-6 col-md-6 text-center">
        निरक्षरताको स्थिति
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="literate_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="literate_male" placeholder="जनसंख्या लेख्नुहोस्"  name="literate_male" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->literate_male }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="literate_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="literate_female" placeholder="जनसंख्या लेख्नुहोस्"  name="literate_female" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->literate_female }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="illiterate_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="illiterate_male" placeholder="जनसंख्या लेख्नुहोस्"  name="illiterate_male" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->illiterate_male }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="illiterate_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="illiterate_female" placeholder="जनसंख्या लेख्नुहोस्"  name="illiterate_female" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->illiterate_female }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 col-sm-6 col-md-6 text-center">
        ६ वर्ष भन्दा कम उमेरको समूह
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="minor_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="minor_male" placeholder="जनसंख्या लेख्नुहोस्"  name="minor_male" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->minor_male }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="minor_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="minor_female" placeholder="जनसंख्या लेख्नुहोस्"  name="minor_female" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->minor_female }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="not_included">उल्लेख नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 ">
        <input type="number" class="form-control" id="not_included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" step=".01" @if(isset($literacy)) value="{{ $literacy->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
