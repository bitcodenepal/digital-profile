<div class="row mb-3">
    <div class="col-12">
        <a href="{{ route('municipality-surface.index') }}" class="btn btn-md btn-info"><i class="fas fa-arrow-circle-left fa-fw"></i> तालिका पृष्ठमा जानुहोस्</a>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">भूमिको प्रकार</label>
    </div>
    <div class="col-12 col-sm-12 col-md-4">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" name="land_type" id="land_type" class="form-control" placeholder="भूमिको प्रकार" @if(isset($landUsage)) value="{{ $numberConverter->english($landUsage->land_type) }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">क्षेत्रफल</label>
    </div>
    <div class="col-12 col-sm-12 col-md-4">
        <input type="number" name="area" id="area" class="form-control" placeholder="क्षेत्रफल" @if(isset($landUsage)) value="{{ $numberConverter->english($landUsage->area) }}" @endif step=".01" required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">प्रतिशत</label>
    </div>
    <div class="col-12 col-sm-12 col-md-4 mb-3">
        <input type="number" name="percentage" id="percentage" class="form-control" placeholder="प्रतिशत" @if(isset($landUsage)) value="{{ $numberConverter->english($landUsage->percentage) }}" @endif step=".01" required>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
    </div>
</div>
