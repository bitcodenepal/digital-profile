<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($religion) && $religion->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($religion) && $religion->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($religion) && $religion->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($religion) && $religion->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($religion) && $religion->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($religion) && $religion->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($religion) && $religion->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($religion) && $religion->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($religion) && $religion->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($religion) && $religion->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($religion) && $religion->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="hindu">हिन्दु</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hindu" placeholder="जनसंख्या लेख्नुहोस्"  name="hindu" min="0" @if(isset($religion)) value="{{ $religion->hindu }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="bouddha">बौद्ध</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="bouddha" placeholder="जनसंख्या लेख्नुहोस्"  name="bouddha" min="0" @if(isset($religion)) value="{{ $religion->bouddha }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="islam">ईस्लाम</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="islam" placeholder="जनसंख्या लेख्नुहोस्"  name="islam" min="0" @if(isset($religion)) value="{{ $religion->islam }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="christian">इसाई</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="christian" placeholder="जनसंख्या लेख्नुहोस्"  name="christian" min="0" @if(isset($religion)) value="{{ $religion->christian }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="kirat">किराँत</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="kirat" placeholder="जनसंख्या लेख्नुहोस्"  name="kirat" min="0" @if(isset($religion)) value="{{ $religion->kirat }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="jain">जैन</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="jain" placeholder="जनसंख्या लेख्नुहोस्"  name="jain" min="0" @if(isset($religion)) value="{{ $religion->jain }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="others" placeholder="जनसंख्या लेख्नुहोस्"  name="others" min="0" @if(isset($religion)) value="{{ $religion->others }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="not-included">उल्लेख नभएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="not-included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($religion)) value="{{ $religion->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
