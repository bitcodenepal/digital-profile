<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($vocational) && $vocational->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($vocational) && $vocational->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($vocational) && $vocational->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($vocational) && $vocational->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($vocational) && $vocational->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($vocational) && $vocational->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($vocational) && $vocational->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($vocational) && $vocational->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($vocational) && $vocational->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($vocational) && $vocational->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($vocational) && $vocational->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="tailor">सिलाई, बुनाई, ...</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="tailor" placeholder="सिलाई, बुनाई, ..."  name="tailor" min="0" @if(isset($vocational)) value="{{ $vocational->tailor }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="communication">सूचना प्रबिधि, इलेक्ट्रिकल, ...</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="communication" placeholder="सूचना प्रबिधि, इलेक्ट्रिकल तथा इलेक्ट्रोनिक्स"  name="communication" min="0" @if(isset($vocational)) value="{{ $vocational->communication }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="construction">निर्माण सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="construction" placeholder="निर्माण सम्बन्धी"  name="construction" min="0" @if(isset($vocational)) value="{{ $vocational->construction }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="mechanic">इञ्जिनियरिङ्ग, अटोमोवाइल, ...</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="mechanic" placeholder="इञ्जिनियरिङ्ग, अटोमोवाइल, ..."  name="mechanic" min="0" @if(isset($vocational)) value="{{ $vocational->mechanic }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="agriculture">कृषि सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="agriculture" placeholder="कृषि सम्बन्धी"  name="agriculture" min="0" @if(isset($vocational)) value="{{ $vocational->agriculture }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="health">जन स्वास्थ सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="health" placeholder="जन स्वास्थ सम्बन्धी"  name="health" min="0" @if(isset($vocational)) value="{{ $vocational->health }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="veterinary">पशु स्वास्थ सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="veterinary" placeholder="पशु स्वास्थ सम्बन्धी"  name="veterinary" min="0" @if(isset($vocational)) value="{{ $vocational->veterinary }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="tourism">पर्यटन सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="tourism" placeholder="पर्यटन सम्बन्धी"  name="tourism" min="0" @if(isset($vocational)) value="{{ $vocational->tourism }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="industry">उद्योग तथा कला सम्बन्धी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="industry" placeholder="उद्योग तथा कला सम्बन्धी"  name="industry" min="0" @if(isset($vocational)) value="{{ $vocational->industry }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="others">अन्य</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="others" placeholder="अन्य"  name="others" min="0" @if(isset($vocational)) value="{{ $vocational->others }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2 text-right">
        <label for="not_included">उल्लेख नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="not_included" placeholder="उल्लेख नभएको"  name="not_included" min="0" @if(isset($vocational)) value="{{ $vocational->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
