<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($handicap) && $handicap->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($handicap) && $handicap->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($handicap) && $handicap->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($handicap) && $handicap->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($handicap) && $handicap->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($handicap) && $handicap->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($handicap) && $handicap->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($handicap) && $handicap->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($handicap) && $handicap->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($handicap) && $handicap->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($handicap) && $handicap->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="physical">शारिरीक अपाङ्गता</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="physical" placeholder="जनसंख्या लेख्नुहोस्"  name="physical" min="0" @if(isset($handicap)) value="{{ $handicap->physical }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="mental">बौद्विक अपाङ्गता</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="mental" placeholder="जनसंख्या लेख्नुहोस्"  name="mental" min="0" @if(isset($handicap)) value="{{ $handicap->mental }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="blind">आँखा नदेख्ने</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="blind" placeholder="जनसंख्या लेख्नुहोस्"  name="blind" min="0" @if(isset($handicap)) value="{{ $handicap->blind }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="deaf">कान नसुन्ने</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="deaf" placeholder="जनसंख्या लेख्नुहोस्"  name="deaf" min="0" @if(isset($handicap)) value="{{ $handicap->deaf }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="dumb">बोली अक्मकिने</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="dumb" placeholder="जनसंख्या लेख्नुहोस्"  name="dumb" min="0" @if(isset($handicap)) value="{{ $handicap->dumb }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="psycho">मनोसामाजिक अपाङ्गता</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="psycho" placeholder="जनसंख्या लेख्नुहोस्"  name="psycho" min="0" @if(isset($handicap)) value="{{ $handicap->psycho }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="healthy">अपाङ्ग नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="healthy" placeholder="जनसंख्या लेख्नुहोस्"  name="healthy" min="0" @if(isset($handicap)) value="{{ $handicap->healthy }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 text-right mt-2">
        <label for="not-included">उल्लेख नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="not-included" placeholder="जनसंख्या लेख्नुहोस्"  name="not_included" min="0" @if(isset($handicap)) value="{{ $handicap->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
