<div class="row mb-3">
    <div class="col-12">
        <a href="{{ route('infrastructure-fuel-gas.index') }}" class="btn btn-md btn-info"><i class="fas fa-arrow-circle-left fa-fw"></i> तालिका पृष्ठमा जानुहोस्</a>
    </div>
</div>

<div class="form-group row">
    <div class="col-1 mt-2">
        <label for="ward-no">वडा नं</label>
    </div>
    <div class="col-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($electricity) && $electricity->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($electricity) && $electricity->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($electricity) && $electricity->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($electricity) && $electricity->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($electricity) && $electricity->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($electricity) && $electricity->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($electricity) && $electricity->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($electricity) && $electricity->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($electricity) && $electricity->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($electricity) && $electricity->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($electricity) && $electricity->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-1 mt-2">
        <label for="electricity">विध्युत</label>
    </div>
    <div class="col-2">
        <input type="number" name="electricity" id="electricity" class="form-control" placeholder="विध्युत" min="0" @if(isset($electricity)) value="{{ $electricity->electricity }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="petrol">मट्टितेल</label>
    </div>
    <div class="col-2">
        <input type="number" name="petrol" id="petrol" class="form-control" placeholder="मट्टितेल" min="0" @if(isset($electricity)) value="{{ $electricity->petrol }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="bio">बायो ग्याँस</label>
    </div>
    <div class="col-2">
        <input type="number" name="bio" id="bio" class="form-control" placeholder="बायो ग्याँस" min="0" @if(isset($electricity)) value="{{ $electricity->bio }}" @endif required>
    </div>
</div>
<div class="form-group row">
    <div class="col-1 mt-2">
        <label for="solar">सोलार</label>
    </div>
    <div class="col-2">
        <input type="number" name="solar" id="solar" class="form-control" placeholder="सोलार" min="0" @if(isset($electricity)) value="{{ $electricity->solar }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" name="others" id="others" class="form-control" placeholder="अन्य" min="0" @if(isset($electricity)) value="{{ $electricity->others }}" @endif required>
    </div>
    <div class="col-6">
        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
    </div>
</div>
