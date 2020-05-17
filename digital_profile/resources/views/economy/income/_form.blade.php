<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर छनौट गर्नुहोस</label>
    </div>
    <div class="col-12 col-sm-8 col-md-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($income) && $income->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($income) && $income->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($income) && $income->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($income) && $income->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($income) && $income->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($income) && $income->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($income) && $income->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($income) && $income->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($income) && $income->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($income) && $income->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($income) && $income->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="lowest">५० हजार भन्दा कम</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="lowest" placeholder="५० हजार भन्दा कम"  name="lowest" min="0" @if(isset($income)) value="{{ $income->lowest }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="below_average">(५०-१५०) हजार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="below_average" placeholder="(५०-१५०) हजार"  name="below_average" min="0" @if(isset($income)) value="{{ $income->below_average }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="average">(१५०-२५०) हजार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="average" placeholder="(१५०-२५०) हजार"  name="average" min="0" @if(isset($income)) value="{{ $income->average }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="above_average">(२५०-५००) हजार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="above_average" placeholder="(२५०-५००) हजार"  name="above_average" min="0" @if(isset($income)) value="{{ $income->above_average }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="highest">५०० हजार बन्दा माथी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="highest" placeholder="५०० हजार बन्दा माथी"  name="highest" min="0" @if(isset($income)) value="{{ $income->highest }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="not_included">उल्लेख नभएको</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="not_included" placeholder="उल्लेख नभएको"  name="not_included" min="0" @if(isset($income)) value="{{ $income->not_included }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
