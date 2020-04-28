@php
    use \App\Services\NumberConverter;
    $numberConverter = new NumberConverter;
@endphp

<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($motherTongue) && $motherTongue->ward_no == "१") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($motherTongue) && $motherTongue->ward_no == "२") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($motherTongue) && $motherTongue->ward_no == "३") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($motherTongue) && $motherTongue->ward_no == "४") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($motherTongue) && $motherTongue->ward_no == "५") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($motherTongue) && $motherTongue->ward_no == "६") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($motherTongue) && $motherTongue->ward_no == "७") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($motherTongue) && $motherTongue->ward_no == "८") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($motherTongue) && $motherTongue->ward_no == "९") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($motherTongue) && $motherTongue->ward_no == "१०") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($motherTongue) && $motherTongue->ward_no == "११") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="nepali">नेपाली</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="nepali" placeholder="जनसंख्या लेख्नुहोस्"  name="nepali" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->nepali) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="maithili">मैथिली</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="maithili" placeholder="जनसंख्या लेख्नुहोस्"  name="maithili" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->maithili) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="bhojpuri">भोजपुरी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="bhojpuri" placeholder="जनसंख्या लेख्नुहोस्"  name="bhojpuri" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->bhojpuri) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="tharu">थारू</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="tharu" placeholder="जनसंख्या लेख्नुहोस्"  name="tharu" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->tharu) }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="hindi">हिन्दी</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="hindi" placeholder="जनसंख्या लेख्नुहोस्"  name="hindi" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->hindi) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="urdu">उर्दू</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="urdu" placeholder="जनसंख्या लेख्नुहोस्"  name="urdu" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->urdu) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="bantawa">बान्तवा</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="bantawa" placeholder="जनसंख्या लेख्नुहोस्"  name="bantawa" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->bantawa) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="tamang">तामाङ्ग</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="tamang" placeholder="जनसंख्या लेख्नुहोस्"  name="tamang" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->tamang) }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="jhagad">झागड</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="jhagad" placeholder="जनसंख्या लेख्नुहोस्"  name="jhagad" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->jhagad) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="others" placeholder="जनसंख्या लेख्नुहोस्"  name="others" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->others) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="not-included">उल्लेख नभएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="not-included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($motherTongue)) value="{{ $numberConverter->english($motherTongue->not_included) }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
