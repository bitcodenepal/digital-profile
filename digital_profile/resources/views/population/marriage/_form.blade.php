<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($marriage) && $marriage->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($marriage) && $marriage->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($marriage) && $marriage->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($marriage) && $marriage->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($marriage) && $marriage->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($marriage) && $marriage->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($marriage) && $marriage->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($marriage) && $marriage->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($marriage) && $marriage->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($marriage) && $marriage->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($marriage) && $marriage->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="unmarried">अविवाहित</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="unmarried" placeholder="जनसंख्या लेख्नुहोस्"  name="unmarried" min="0" @if(isset($marriage)) value="{{ $marriage->unmarried }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="single">एकल विवाह</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="single" placeholder="जनसंख्या लेख्नुहोस्"  name="single" min="0" @if(isset($marriage)) value="{{ $marriage->single }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="multiple">वहुविवाह</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="multiple" placeholder="जनसंख्या लेख्नुहोस्"  name="multiple" min="0" @if(isset($marriage)) value="{{ $marriage->multiple }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="remarried">पुनः विवाह</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="remarried" placeholder="जनसंख्या लेख्नुहोस्"  name="remarried" min="0" @if(isset($marriage)) value="{{ $marriage->remarried }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="widowed">विधवा/विदुर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="widowed" placeholder="जनसंख्या लेख्नुहोस्"  name="widowed" min="0" @if(isset($marriage)) value="{{ $marriage->widowed }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="divorced">सम्बन्ध विच्छेद</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="divorced" placeholder="जनसंख्या लेख्नुहोस्"  name="divorced" min="0" @if(isset($marriage)) value="{{ $marriage->divorced }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="separated">विवाहित तर अलग बसेको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="separated" placeholder="जनसंख्या लेख्नुहोस्"  name="separated" min="0" @if(isset($marriage)) value="{{ $marriage->separated }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="early">कम उमेर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="early" placeholder="जनसंख्या लेख्नुहोस्"  name="early" min="0" @if(isset($marriage)) value="{{ $marriage->early }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="not-included">उल्लेख नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="not-included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($marriage)) value="{{ $marriage->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
