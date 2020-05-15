<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($communication) && $communication->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($communication) && $communication->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($communication) && $communication->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($communication) && $communication->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($communication) && $communication->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($communication) && $communication->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($communication) && $communication->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($communication) && $communication->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($communication) && $communication->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($communication) && $communication->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($communication) && $communication->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="radio">रेडियो</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="radio" placeholder="रेडियो"  name="radio" min="0" @if(isset($communication)) value="{{ $communication->radio }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="tv">टेलिभिजन</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="tv" placeholder="टेलिभिजन"  name="tv" min="0" @if(isset($communication)) value="{{ $communication->tv }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="mobile">मोबाइल/ टेलिफोन</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="mobile" placeholder="मोबाइल/टेलिफोन"  name="mobile" min="0" @if(isset($communication)) value="{{ $communication->mobile }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="computer">कम्प्युटर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="computer" placeholder="कम्प्युटर"  name="computer" min="0" @if(isset($communication)) value="{{ $communication->computer }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="internet">इन्टरनेट</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="internet" placeholder="इन्टरनेट"  name="internet" min="0" @if(isset($communication)) value="{{ $communication->internet }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="fridge">रेफ्रीजरेटर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="fridge" placeholder="रेफ्रीजरेटर"  name="fridge" min="0" @if(isset($communication)) value="{{ $communication->fridge }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="bike">मोटरसाइकल</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="bike" placeholder="मोटरसाइकल"  name="bike" min="0" @if(isset($communication)) value="{{ $communication->bike }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="car">मोटर / कार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="car" placeholder="मोटर / कार"  name="car" min="0" @if(isset($communication)) value="{{ $communication->car }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="bus">बस / ट्रक</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="bus" placeholder="बस / ट्रक"  name="bus" min="0" @if(isset($communication)) value="{{ $communication->bus }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="none">कुनै नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="none" placeholder="कुनै नभएको"  name="none" min="0" @if(isset($communication)) value="{{ $communication->none }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
