@php
    use \App\Services\NumberConverter;
    $numberConverter = new NumberConverter;
@endphp

<div class="form-group row">
    <div class="col-2 mt-2">
        <label for="ward-no">वडा नं छनौट गर्नुहोस्</label>
    </div>
    <div class="col-4">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($populationAge) && $populationAge->ward_no == "१") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($populationAge) && $populationAge->ward_no == "२") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($populationAge) && $populationAge->ward_no == "३") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($populationAge) && $populationAge->ward_no == "४") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($populationAge) && $populationAge->ward_no == "५") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($populationAge) && $populationAge->ward_no == "६") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($populationAge) && $populationAge->ward_no == "७") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($populationAge) && $populationAge->ward_no == "८") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($populationAge) && $populationAge->ward_no == "९") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($populationAge) && $populationAge->ward_no == "१०") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($populationAge) && $populationAge->ward_no == "११") ? "selected" : "" }}>११</option>
        </select>
    </div>
</div>
<hr>

<div class="row text-center">
    <div class="col-6">
        ५ वर्ष मुनी
    </div>
    <div class="col-6">
        ६-१४ वर्ष
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="male-five">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-five" placeholder="जनसंख्या लेख्नुहोस्"  name="male_five" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_five) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-five">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-five" placeholder="जनसंख्या लेख्नुहोस्"  name="female_five" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_five) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="male-six">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-six" placeholder="जनसंख्या लेख्नुहोस्"  name="male_six" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_six) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-six">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-six" placeholder="जनसंख्या लेख्नुहोस्"  name="female_six" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_six) }}" @endif required>
    </div>
</div>
<hr>

<div class="row text-center">
    <div class="col-6">
        १५-१८ वर्ष
    </div>
    <div class="col-6">
        १९-२४ वर्ष
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="male-fifteen">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-fifteen" placeholder="जनसंख्या लेख्नुहोस्"  name="male_fifteen" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_fifteen) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-fifteen">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-fifteen" placeholder="जनसंख्या लेख्नुहोस्"  name="female_fifteen" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_fifteen) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="male-nineteen">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-nineteen" placeholder="जनसंख्या लेख्नुहोस्"  name="male_nineteen" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_nineteen) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-nineteen">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-nineteen" placeholder="जनसंख्या लेख्नुहोस्"  name="female_nineteen" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_nineteen) }}" @endif required>
    </div>
</div>
<hr>

<div class="row text-center">
    <div class="col-6">
        २५-४९ वर्ष
    </div>
    <div class="col-6">
        ५०-५९ वर्ष
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="male-twenty_five">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-twenty_five" placeholder="जनसंख्या लेख्नुहोस्"  name="male_twenty_five" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_twenty_five) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-twenty_five">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-twenty_five" placeholder="जनसंख्या लेख्नुहोस्"  name="female_twenty_five" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_twenty_five) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="male-fifty">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-fifty" placeholder="जनसंख्या लेख्नुहोस्"  name="male_fifty" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_fifty) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-fifty">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-fifty" placeholder="जनसंख्या लेख्नुहोस्"  name="female_fifty" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_fifty) }}" @endif required>
    </div>
</div>
<hr>

<div class="row text-center">
    <div class="col-6">
        ६०-६९ वर्ष
    </div>
    <div class="col-6">
        ७० वर्ष माथि
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-1 text-right mt-2">
        <label for="male-sixty">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-sixty" placeholder="जनसंख्या लेख्नुहोस्"  name="male_sixty" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_sixty) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-sixty">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-sixty" placeholder="जनसंख्या लेख्नुहोस्"  name="female_sixty" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_sixty) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="male-seventy">पुरुष</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="male-seventy" placeholder="जनसंख्या लेख्नुहोस्"  name="male_seventy" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->male_seventy) }}" @endif required>
    </div>
    <div class="col-1 text-right mt-2">
        <label for="female-seventy">महिला</label>
    </div>
    <div class="col-2">
        <input type="number" class="form-control" id="female-seventy" placeholder="जनसंख्या लेख्नुहोस्"  name="female_seventy" min="1" @if(isset($populationAge)) value="{{ $numberConverter->english($populationAge->female_seventy) }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>
