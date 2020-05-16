<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($foundation) && $foundation->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($foundation) && $foundation->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($foundation) && $foundation->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($foundation) && $foundation->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($foundation) && $foundation->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($foundation) && $foundation->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($foundation) && $foundation->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($foundation) && $foundation->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($foundation) && $foundation->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($foundation) && $foundation->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($foundation) && $foundation->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="mud">माटो वा ढुङ्गा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="mud" placeholder="माटो वा ढुङ्गा"  name="mud" min="0" @if(isset($foundation)) value="{{ $foundation->mud }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cement">सिमेन्ट वा ढुङ्गा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="cement" placeholder="सिमेन्ट वा ढुङ्गा"  name="cement" min="0" @if(isset($foundation)) value="{{ $foundation->cement }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="frame">फ्रेम स्ट्रक्चर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="frame" placeholder="फ्रेम स्ट्रक्चर"  name="frame" min="0" @if(isset($foundation)) value="{{ $foundation->frame }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="load">लोड वेयरिङ्ग</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="load" placeholder="लोड वेयरिङ्ग"  name="load" min="0" @if(isset($foundation)) value="{{ $foundation->load }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="wood">काठको खम्बा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="wood" placeholder="काठको खम्बा"  name="wood" min="0" @if(isset($foundation)) value="{{ $foundation->wood }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="others">अन्य</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="others" placeholder="अन्य"  name="others" min="0" @if(isset($foundation)) value="{{ $foundation->others }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
