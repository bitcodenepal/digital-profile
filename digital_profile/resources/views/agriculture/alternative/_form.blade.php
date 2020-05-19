<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($alternative) && $alternative->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($alternative) && $alternative->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($alternative) && $alternative->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($alternative) && $alternative->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($alternative) && $alternative->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($alternative) && $alternative->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($alternative) && $alternative->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($alternative) && $alternative->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($alternative) && $alternative->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($alternative) && $alternative->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($alternative) && $alternative->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center text-bold">
        माछा पालन
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="pond">पोखरी संख्या</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="pond" placeholder="पोखरी संख्या"  name="pond" min="0" @if(isset($alternative)) value="{{ $alternative->pond }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="area">क्षेत्रफल</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="area" placeholder="क्षेत्रफल"  name="area" min="0" @if(isset($alternative)) value="{{ $alternative->area }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="fish">उत्पादन (क्विन्टल)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="fish" placeholder="उत्पादन (क्विन्टल)"  name="fish" min="0" @if(isset($alternative)) value="{{ $alternative->fish }}" @endif required>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 text-center text-bold">
        मौरी पालन
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="hive">घार संख्या</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="hive" placeholder="घार संख्या"  name="hive" min="0" @if(isset($alternative)) value="{{ $alternative->hive }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="honey">उत्पादन (केजी)</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="honey" placeholder="उत्पादन (केजी)"  name="honey" min="0" @if(isset($alternative)) value="{{ $alternative->honey }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
