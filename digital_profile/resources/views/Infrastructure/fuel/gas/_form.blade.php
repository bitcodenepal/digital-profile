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
            <option value="1" {{ (isset($gas) && $gas->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($gas) && $gas->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($gas) && $gas->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($gas) && $gas->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($gas) && $gas->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($gas) && $gas->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($gas) && $gas->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($gas) && $gas->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($gas) && $gas->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($gas) && $gas->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($gas) && $gas->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-1 mt-2">
        <label for="wood">दाउरा</label>
    </div>
    <div class="col-2">
        <input type="number" name="wood" id="wood" class="form-control" placeholder="दाउरा" min="0" @if(isset($gas)) value="{{ $gas->wood }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="petrol">मट्टितेल</label>
    </div>
    <div class="col-2">
        <input type="number" name="petrol" id="petrol" class="form-control" placeholder="मट्टितेल" min="0" @if(isset($gas)) value="{{ $gas->petrol }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="lp">एल पी ग्याँस</label>
    </div>
    <div class="col-2">
        <input type="number" name="lp" id="lp" class="form-control" placeholder="एल पी ग्याँस" min="0" @if(isset($gas)) value="{{ $gas->lp }}" @endif required>
    </div>
</div>
<div class="form-group row">
    <div class="col-1 mt-2">
        <label for="dung">गोवर ग्याँस</label>
    </div>
    <div class="col-2">
        <input type="number" name="dung" id="dung" class="form-control" placeholder="गोवर ग्याँस" min="0" @if(isset($gas)) value="{{ $gas->dung }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="dung_roll">गुईठा</label>
    </div>
    <div class="col-2">
        <input type="number" name="dung_roll" id="dung_roll" class="form-control" placeholder="गुईठा" min="0" @if(isset($gas)) value="{{ $gas->dung_roll }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="electricity">विध्युत</label>
    </div>
    <div class="col-2">
        <input type="number" name="electricity" id="electricity" class="form-control" placeholder="विध्युत" min="0" @if(isset($gas)) value="{{ $gas->electricity }}" @endif required>
    </div>
    <div class="col-1 mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-2">
        <input type="number" name="others" id="others" class="form-control" placeholder="अन्य" min="0" @if(isset($gas)) value="{{ $gas->others }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-success btn-md"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
    </div>
</div>
