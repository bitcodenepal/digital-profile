<div class="modal-body">
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="ward-no">वडा नं</label>
        </div>
        <div class="col-9">
            <select name="ward_no" id="ward-no" class="form-control">
                <option value="1" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "१") ? "selected" : "" }}>१</option>
                <option value="2" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "२") ? "selected" : "" }}>२</option>
                <option value="3" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "३") ? "selected" : "" }}>३</option>
                <option value="4" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "४") ? "selected" : "" }}>४</option>
                <option value="5" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "५") ? "selected" : "" }}>५</option>
                <option value="6" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "६") ? "selected" : "" }}>६</option>
                <option value="7" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "७") ? "selected" : "" }}>७</option>
                <option value="8" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "८") ? "selected" : "" }}>८</option>
                <option value="9" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "९") ? "selected" : "" }}>९</option>
                <option value="10" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "१०") ? "selected" : "" }}>१०</option>
                <option value="11" {{ (isset($populationDistribution) && $populationDistribution->ward_no == "११") ? "selected" : "" }}>११</option>
            </select>
        </div>
    </div>    
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="household-number">घरपरिवार संख्या</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="household-number" placeholder="घरपरिवार संख्या लेख्नुहोस्"  name="household_number" min="1" @if(isset($populationDistribution)) value="{{ $numberConverter->english($populationDistribution->household_number) }}" @endif required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="male-number">पुरुष संख्या</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="male-number" placeholder="पुरुष संख्या लेख्नुहोस्"  name="male_number" min="1" @if(isset($populationDistribution)) value="{{ $numberConverter->english($populationDistribution->male_number) }}" @endif required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3 text-right mt-2">
            <label for="female-number">महिला संख्या</label>
        </div>
        <div class="col-9">
            <input type="number" class="form-control" id="female-number" placeholder="महिला संख्या लेख्नुहोस्"  name="female_number" min="1" @if(isset($populationDistribution)) value="{{ $numberConverter->english($populationDistribution->female_number) }}" @endif required>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-md btn-success float-right"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
</div>