<div class="row mb-3">
    <div class="col-12">
        <a href="{{ route('municipality-surface.index') }}" class="btn btn-md btn-info"><i class="fas fa-arrow-circle-left fa-fw"></i> तालिका पृष्ठमा जानुहोस्</a>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="ward-no">वडा नं</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($surface) && $surface->ward_no == "१") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($surface) && $surface->ward_no == "२") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($surface) && $surface->ward_no == "३") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($surface) && $surface->ward_no == "४") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($surface) && $surface->ward_no == "५") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($surface) && $surface->ward_no == "६") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($surface) && $surface->ward_no == "७") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($surface) && $surface->ward_no == "८") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($surface) && $surface->ward_no == "९") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($surface) && $surface->ward_no == "१०") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($surface) && $surface->ward_no == "११") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="unit">इकाई</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="unit" id="unit" class="form-control" placeholder="इकाई" @if(isset($surface)) value="{{ $surface->unit }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="first">अब्बल</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" name="first" id="first" class="form-control" placeholder="अब्बल" min="0" @if(isset($surface)) value="{{ $numberConverter->english($surface->first) }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="second">दोयम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" name="second" id="second" class="form-control" placeholder="दोयम" min="0" @if(isset($surface)) value="{{ $numberConverter->english($surface->second) }}" @endif required>
    </div>
</div>
<div class="form-group row">
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="third">सिम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" name="third" id="third" class="form-control" placeholder="सिम" min="0" @if(isset($surface)) value="{{ $numberConverter->english($surface->third) }}" @endif required>
    </div>
    <div class="col-12 col-sm-2 col-md-1 mt-2">
        <label for="fourth">चहार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mb-3">
        <input type="number" name="fourth" id="fourth" class="form-control" placeholder="चहार" min="0" @if(isset($surface)) value="{{ $numberConverter->english($surface->fourth) }}" @endif required>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
    </div>
</div>
