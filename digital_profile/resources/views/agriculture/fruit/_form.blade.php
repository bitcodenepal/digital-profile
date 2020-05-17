<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($fruit) && $fruit->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($fruit) && $fruit->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($fruit) && $fruit->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($fruit) && $fruit->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($fruit) && $fruit->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($fruit) && $fruit->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($fruit) && $fruit->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($fruit) && $fruit->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($fruit) && $fruit->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($fruit) && $fruit->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($fruit) && $fruit->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center text-bold">
        तरकारी बाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="veggie_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="veggie_area" placeholder="क्षेत्रफल (कट्ठा)"  name="veggie_area" min="0" @if(isset($fruit)) value="{{ $fruit->veggie_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="veggie_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="veggie_production" placeholder="उत्पादन (क्विन्टल)"  name="veggie_production" min="0" @if(isset($fruit)) value="{{ $fruit->veggie_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="veggie_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="veggie_sold" placeholder="बिक्री (क्विन्टल)"  name="veggie_sold" min="0" @if(isset($fruit)) value="{{ $fruit->veggie_sold }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        फलफुल बाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="fruit_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="fruit_area" placeholder="क्षेत्रफल (कट्ठा)"  name="fruit_area" min="0" @if(isset($fruit)) value="{{ $fruit->fruit_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="fruit_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="fruit_production" placeholder="उत्पादन (क्विन्टल)"  name="fruit_production" min="0" @if(isset($fruit)) value="{{ $fruit->fruit_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="fruit_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="fruit_sold" placeholder="बिक्री (क्विन्टल)"  name="fruit_sold" min="0" @if(isset($fruit)) value="{{ $fruit->fruit_sold }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        नगदे बाली
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cash_area">क्षेत्रफल (कट्ठा)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="cash_area" placeholder="क्षेत्रफल (कट्ठा)"  name="cash_area" min="0" @if(isset($fruit)) value="{{ $fruit->cash_area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cash_production">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="cash_production" placeholder="उत्पादन (क्विन्टल)"  name="cash_production" min="0" @if(isset($fruit)) value="{{ $fruit->cash_production }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cash_sold">बिक्री (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="cash_sold" placeholder="बिक्री (क्विन्टल)"  name="cash_sold" min="0" @if(isset($fruit)) value="{{ $fruit->cash_sold }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
