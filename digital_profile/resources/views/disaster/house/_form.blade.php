<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($house) && $house->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($house) && $house->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($house) && $house->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($house) && $house->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($house) && $house->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($house) && $house->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($house) && $house->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($house) && $house->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($house) && $house->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($house) && $house->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($house) && $house->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="safe_built">मापदण्ड अनुसार बनेको</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="safe_built" placeholder="मापदण्ड अनुसार बनेको"  name="safe_built" min="0" @if(isset($house)) value="{{ $house->safe_built }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="unsafe_built">मापदण्ड अनुसार नबनेको</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="unsafe_built" placeholder="मापदण्ड अनुसार नबनेको"  name="unsafe_built" min="0" @if(isset($house)) value="{{ $house->unsafe_built }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="built_for_quakes">भुकम्प प्रतिरोधी भएको</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="built_for_quakes" placeholder="भुकम्प प्रतिरोधी भएको"  name="built_for_quakes" min="0" @if(isset($house)) value="{{ $house->built_for_quakes }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="not_built_for_quakes">भुकम्प प्रतिरोधी नभएको</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="not_built_for_quakes" placeholder="भुकम्प प्रतिरोधी नभएको"  name="not_built_for_quakes" min="0" @if(isset($house)) value="{{ $house->not_built_for_quakes }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
