<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($crop) && $crop->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($crop) && $crop->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($crop) && $crop->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($crop) && $crop->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($crop) && $crop->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($crop) && $crop->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($crop) && $crop->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($crop) && $crop->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($crop) && $crop->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($crop) && $crop->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($crop) && $crop->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center text-bold">
        अन्नवाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="crop_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="crop_area" placeholder="क्षेत्रफल (कट्ठा)"  name="crop_area" min="0" @if(isset($crop)) value="{{ $crop->crop_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="crop_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="crop_production" placeholder="उत्पादन (क्विन्टल)"  name="crop_production" min="0" @if(isset($crop)) value="{{ $crop->crop_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="crop_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="crop_sold" placeholder="बिक्री (क्विन्टल)"  name="crop_sold" min="0" @if(isset($crop)) value="{{ $crop->crop_sold }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        दलहन बाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="pulse_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="pulse_area" placeholder="क्षेत्रफल (कट्ठा)"  name="pulse_area" min="0" @if(isset($crop)) value="{{ $crop->pulse_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="pulse_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="pulse_production" placeholder="उत्पादन (क्विन्टल)"  name="pulse_production" min="0" @if(isset($crop)) value="{{ $crop->pulse_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="pulse_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="pulse_sold" placeholder="बिक्री (क्विन्टल)"  name="pulse_sold" min="0" @if(isset($crop)) value="{{ $crop->pulse_sold }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        तेल्हल बाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="oil_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="oil_area" placeholder="क्षेत्रफल (कट्ठा)"  name="oil_area" min="0" @if(isset($crop)) value="{{ $crop->oil_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="oil_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="oil_production" placeholder="उत्पादन (क्विन्टल)"  name="oil_production" min="0" @if(isset($crop)) value="{{ $crop->oil_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="oil_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="oil_sold" placeholder="बिक्री (क्विन्टल)"  name="oil_sold" min="0" @if(isset($crop)) value="{{ $crop->oil_sold }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
