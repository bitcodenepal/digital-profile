<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($caste) && $caste->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($caste) && $caste->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($caste) && $caste->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($caste) && $caste->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($caste) && $caste->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($caste) && $caste->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($caste) && $caste->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($caste) && $caste->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($caste) && $caste->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($caste) && $caste->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($caste) && $caste->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="hill_brahmin">पहाडी ब्राह्मण/क्षेत्री</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hill_brahmin" placeholder="जनसंख्या लेख्नुहोस्"  name="hill_brahmin" min="0" @if(isset($caste)) value="{{ $caste->hill_brahmin }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="terai_brahmin">तराई ब्राह्मण/क्षेत्री</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="terai_brahmin" placeholder="जनसंख्या लेख्नुहोस्"  name="terai_brahmin" min="0" @if(isset($caste)) value="{{ $caste->terai_brahmin }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="hill_tribe">पहाडी आदीवासी/जनजाती</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hill_tribe" placeholder="जनसंख्या लेख्नुहोस्"  name="hill_tribe" min="0" @if(isset($caste)) value="{{ $caste->hill_tribe }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="terai_tribe">तराई आदीवासी/जनजाती</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="terai_tribe" placeholder="जनसंख्या लेख्नुहोस्"  name="terai_tribe" min="0" @if(isset($caste)) value="{{ $caste->terai_tribe }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="hill_low">पहाडी दलित</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hill_low" placeholder="जनसंख्या लेख्नुहोस्"  name="hill_low" min="0" @if(isset($caste)) value="{{ $caste->hill_low }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="terai_low">तराई दलित</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="terai_low" placeholder="जनसंख्या लेख्नुहोस्"  name="terai_low" min="0" @if(isset($caste)) value="{{ $caste->terai_low }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="muslim">मुस्लिम</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="muslim" placeholder="जनसंख्या लेख्नुहोस्"  name="muslim" min="0" @if(isset($caste)) value="{{ $caste->muslim }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="hill_others">पहाडी अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hill_others" placeholder="जनसंख्या लेख्नुहोस्"  name="hill_others" min="0" @if(isset($caste)) value="{{ $caste->hill_others }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="terai_others">तराई अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="terai_others" placeholder="जनसंख्या लेख्नुहोस्"  name="terai_others" min="0" @if(isset($caste)) value="{{ $caste->terai_others }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="not-included">उल्लेख नभएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="not-included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($caste)) value="{{ $caste->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
