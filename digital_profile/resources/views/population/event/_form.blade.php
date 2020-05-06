<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($event) && $event->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($event) && $event->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($event) && $event->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($event) && $event->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($event) && $event->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($event) && $event->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($event) && $event->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($event) && $event->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($event) && $event->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($event) && $event->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($event) && $event->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-2 text-right mt-2">
        <label for="birth">जन्म</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="birth" placeholder="जनसंख्या लेख्नुहोस्"  name="birth" min="0" @if(isset($event)) value="{{ $event->birth }}" @endif required>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="death">मृत्यु</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="death" placeholder="जनसंख्या लेख्नुहोस्"  name="death" min="0" @if(isset($event)) value="{{ $event->death }}" @endif required>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="marriage">विवाह</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="marriage" placeholder="जनसंख्या लेख्नुहोस्"  name="marriage" min="0" @if(isset($event)) value="{{ $event->marriage }}" @endif required>
    </div>
</div>

<div class="row">
    <div class="col-2 text-right mt-2">
        <label for="immigration">बसाईसराई आएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="immigration" placeholder="जनसंख्या लेख्नुहोस्"  name="immigration" min="0" @if(isset($event)) value="{{ $event->immigration }}" @endif required>
    </div>
    <div class="col-2 text-right mt-2">
        <label for="emigration">बसाईसराई गएको</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="emigration" placeholder="जनसंख्या लेख्नुहोस्"  name="emigration" min="0" @if(isset($event)) value="{{ $event->emigration }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
