<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($water) && $water->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($water) && $water->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($water) && $water->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($water) && $water->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($water) && $water->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($water) && $water->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($water) && $water->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($water) && $water->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($water) && $water->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($water) && $water->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($water) && $water->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="pipe_tap">घरमै पाइप धारा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="pipe_tap" placeholder="जनसंख्या लेख्नुहोस्"  name="pipe_tap" min="0" step=".01" @if(isset($water)) value="{{ $water->pipe_tap }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="public_tap">सार्वजनिक धारा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="public_tap" placeholder="जनसंख्या लेख्नुहोस्"  name="public_tap" min="0" step=".01" @if(isset($water)) value="{{ $water->public_tap }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="deep_boring">डिप बोरिङ्ग</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="deep_boring" placeholder="जनसंख्या लेख्नुहोस्"  name="deep_boring" min="0" step=".01" @if(isset($water)) value="{{ $water->deep_boring }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="tap">नल</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="tap" placeholder="जनसंख्या लेख्नुहोस्"  name="tap" min="0" step=".01" @if(isset($water)) value="{{ $water->tap }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="closed_well">ढाकिएको इनार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="closed_well" placeholder="जनसंख्या लेख्नुहोस्"  name="closed_well" min="0" step=".01" @if(isset($water)) value="{{ $water->closed_well }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="open_well">नढाकिएको इनार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="open_well" placeholder="जनसंख्या लेख्नुहोस्"  name="open_well" min="0" step=".01" @if(isset($water)) value="{{ $water->open_well }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="original">मूलको पानी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="original" placeholder="जनसंख्या लेख्नुहोस्"  name="original" min="0" step=".01" @if(isset($water)) value="{{ $water->original }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="river">नदी/खोला</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="river" placeholder="जनसंख्या लेख्नुहोस्"  name="river" min="0" step=".01" @if(isset($water)) value="{{ $water->river }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-1 text-right mt-2">
        <label for="others">अन्य</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="others" placeholder="जनसंख्या लेख्नुहोस्"  name="others" min="0" step=".01" @if(isset($water)) value="{{ $water->others }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
