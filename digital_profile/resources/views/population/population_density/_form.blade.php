<div class="modal-body">
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="ward-no">वडा नं</label>
        </div>
        <div class="col-9">
            <select name="ward_no" id="ward-no" class="form-control">
                <option value="1" {{ (isset($populationDensity) && $populationDensity->ward_no == "१") ? "selected" : "" }}>१</option>
                <option value="2" {{ (isset($populationDensity) && $populationDensity->ward_no == "२") ? "selected" : "" }}>२</option>
                <option value="3" {{ (isset($populationDensity) && $populationDensity->ward_no == "३") ? "selected" : "" }}>३</option>
                <option value="4" {{ (isset($populationDensity) && $populationDensity->ward_no == "४") ? "selected" : "" }}>४</option>
                <option value="5" {{ (isset($populationDensity) && $populationDensity->ward_no == "५") ? "selected" : "" }}>५</option>
                <option value="6" {{ (isset($populationDensity) && $populationDensity->ward_no == "६") ? "selected" : "" }}>६</option>
                <option value="7" {{ (isset($populationDensity) && $populationDensity->ward_no == "७") ? "selected" : "" }}>७</option>
                <option value="8" {{ (isset($populationDensity) && $populationDensity->ward_no == "८") ? "selected" : "" }}>८</option>
                <option value="9" {{ (isset($populationDensity) && $populationDensity->ward_no == "९") ? "selected" : "" }}>९</option>
                <option value="10" {{ (isset($populationDensity) && $populationDensity->ward_no == "१०") ? "selected" : "" }}>१०</option>
                <option value="11" {{ (isset($populationDensity) && $populationDensity->ward_no == "११") ? "selected" : "" }}>११</option>
            </select>
        </div>
    </div>    
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="population">जनसंख्या</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="population" placeholder="जनसंख्या लेख्नुहोस्"  name="population" min="1" @if(isset($populationDensity)) value="{{ $numberConverter->english($populationDensity->population) }}" @endif required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="percent">जनसंख्या प्रतिशत</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="percent" placeholder="जनसंख्या प्रतिशत लेख्नुहोस्"  name="population_percent" min="1" @if(isset($populationDensity)) value="{{ $numberConverter->english($populationDensity->population_percent) }}" @endif step=".01" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="area">क्षेत्रफल (वकिमी)</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="area" placeholder="क्षेत्रफल (वकिमी) लेख्नुहोस्"  name="area" min="1" @if(isset($populationDensity)) value="{{ $numberConverter->english($populationDensity->area) }}" @endif step=".01" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="area-percent">क्षेत्रफल प्रतिशत</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="area-percent" placeholder="क्षेत्रफल प्रतिशत लेख्नुहोस्"  name="area_percent" min="1" @if(isset($populationDensity)) value="{{ $numberConverter->english($populationDensity->area_percent) }}" @endif step=".01" required>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-md btn-success float-right"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
</div>