<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($dairy) && $dairy->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($dairy) && $dairy->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($dairy) && $dairy->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($dairy) && $dairy->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($dairy) && $dairy->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($dairy) && $dairy->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($dairy) && $dairy->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($dairy) && $dairy->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($dairy) && $dairy->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($dairy) && $dairy->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($dairy) && $dairy->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center text-bold">
        गाई/गोरु
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cow">संख्या</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="cow" placeholder="संख्या"  name="cow" min="0" @if(isset($dairy)) value="{{ $dairy->cow }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="cow_milk">दुध/घ्यु उत्पादन (लिटर)</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="cow_milk" placeholder="दुध/घ्यु उत्पादन (लिटर)"  name="cow_milk" min="0" @if(isset($dairy)) value="{{ $dairy->cow_milk }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        भैंसी/राँगा
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="buffalo">संख्या</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="buffalo" placeholder="संख्या"  name="buffalo" min="0" @if(isset($dairy)) value="{{ $dairy->buffalo }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="buffalo_milk">दुध/घ्यु उत्पादन (लिटर)</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <input type="number" class="form-control" id="buffalo_milk" placeholder="दुध/घ्यु उत्पादन (लिटर)"  name="buffalo_milk" min="0" @if(isset($dairy)) value="{{ $dairy->buffalo_milk }}" @endif required>
    </div>
</div>
<br>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
