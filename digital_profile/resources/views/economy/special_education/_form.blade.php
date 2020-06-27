<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($specialEducation) && $specialEducation->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($specialEducation) && $specialEducation->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($specialEducation) && $specialEducation->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($specialEducation) && $specialEducation->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($specialEducation) && $specialEducation->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($specialEducation) && $specialEducation->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($specialEducation) && $specialEducation->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($specialEducation) && $specialEducation->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($specialEducation) && $specialEducation->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($specialEducation) && $specialEducation->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($specialEducation) && $specialEducation->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">कृषि र पशु</span>
    </div>
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">इन्जिन्यरिंग</span>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="agriculture_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="agriculture_female" placeholder="जनसंख्या लेख्नुहोस्"  name="agriculture_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->agriculture_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="agriculture_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="agriculture_male" placeholder="जनसंख्या लेख्नुहोस्"  name="agriculture_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->agriculture_male }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="engineering_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="engineering_female" placeholder="जनसंख्या लेख्नुहोस्"  name="engineering_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->engineering_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="engineering_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="engineering_male" placeholder="जनसंख्या लेख्नुहोस्"  name="engineering_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->engineering_male }}" @endif>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">वन</span>
    </div>
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">मेडिसिन</span>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="forestry_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="forestry_female" placeholder="जनसंख्या लेख्नुहोस्"  name="forestry_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->forestry_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="forestry_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="forestry_male" placeholder="जनसंख्या लेख्नुहोस्"  name="forestry_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->forestry_male }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="medicine_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="medicine_female" placeholder="जनसंख्या लेख्नुहोस्"  name="medicine_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->medicine_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="medicine_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="medicine_male" placeholder="जनसंख्या लेख्नुहोस्"  name="medicine_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->medicine_male }}" @endif>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">वकिल</span>
    </div>
    <div class="col-12 col-md-6 text-center">
        <span class="text-bold">पत्रकार</span>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="law_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="law_female" placeholder="जनसंख्या लेख्नुहोस्"  name="law_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->law_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="law_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="law_male" placeholder="जनसंख्या लेख्नुहोस्"  name="law_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->law_male }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="journalism_female">महिला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="journalism_female" placeholder="जनसंख्या लेख्नुहोस्"  name="journalism_female" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->journalism_female }}" @endif>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="journalism_male">पुरुष</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="journalism_male" placeholder="जनसंख्या लेख्नुहोस्"  name="journalism_male" min="0" @if(isset($specialEducation)) value="{{ $specialEducation->journalism_male }}" @endif>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
