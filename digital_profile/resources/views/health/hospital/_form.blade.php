<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="name">स्वास्थ संस्थाको नाम र ठेगाना</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="स्वास्थ संस्थाको नाम र ठेगाना"  name="name" min="0" @if(isset($hospital)) value="{{ $hospital->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 mt-2 text-right">
        <label for="ward-no">वडा नम्बर</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="ward_no" id="ward-no" class="form-control">
            <option value="1" {{ (isset($hospital) && $hospital->ward_no == "1") ? "selected" : "" }}>१</option>
            <option value="2" {{ (isset($hospital) && $hospital->ward_no == "2") ? "selected" : "" }}>२</option>
            <option value="3" {{ (isset($hospital) && $hospital->ward_no == "3") ? "selected" : "" }}>३</option>
            <option value="4" {{ (isset($hospital) && $hospital->ward_no == "4") ? "selected" : "" }}>४</option>
            <option value="5" {{ (isset($hospital) && $hospital->ward_no == "5") ? "selected" : "" }}>५</option>
            <option value="6" {{ (isset($hospital) && $hospital->ward_no == "6") ? "selected" : "" }}>६</option>
            <option value="7" {{ (isset($hospital) && $hospital->ward_no == "7") ? "selected" : "" }}>७</option>
            <option value="8" {{ (isset($hospital) && $hospital->ward_no == "8") ? "selected" : "" }}>८</option>
            <option value="9" {{ (isset($hospital) && $hospital->ward_no == "9") ? "selected" : "" }}>९</option>
            <option value="10" {{ (isset($hospital) && $hospital->ward_no == "10") ? "selected" : "" }}>१०</option>
            <option value="11" {{ (isset($hospital) && $hospital->ward_no == "11") ? "selected" : "" }}>११</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="position">स्वीकृत दरबन्दी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="position" placeholder="स्वीकृत दरबन्दी"  name="position" min="0" @if(isset($hospital)) value="{{ $hospital->position }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="working">कार्यरत स्वास्थकर्मी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="working" placeholder="कार्यरत स्वास्थकर्मी"  name="working" min="0" @if(isset($hospital)) value="{{ $hospital->working }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="bed">शैया संख्या</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="bed" placeholder="शैया संख्या"  name="bed" min="0" @if(isset($hospital)) value="{{ $hospital->bed }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="maternity">प्रसुती सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="maternity" id="maternity" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->maternity == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->maternity == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="lab">ल्याब</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="lab" id="lab" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->lab == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->lab == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="clinic">क्लिनिक</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="clinic" id="clinic" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->clinic == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->clinic == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="radiography">एक्सरे</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="radiography" id="radiography" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->radiography == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->radiography == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="family_planning">परिवार नियोजन</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="family_planning" id="family_planning" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->family_planning == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->family_planning == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="vaccination">खोप सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="vaccination" id="vaccination" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->vaccination == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->vaccination == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="motherhood">सुरक्षित मातृत्व</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="motherhood" id="motherhood" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->motherhood == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->motherhood == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="nutrition">पोषण सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="nutrition" id="nutrition" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->nutrition == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->nutrition == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="blood">रक्त संचार</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="blood" id="blood" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->blood == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->blood == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="pharmacy">फार्मेसी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="pharmacy" id="pharmacy" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->pharmacy == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->pharmacy == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="optometry">आँखा उपचार सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="optometry" id="optometry" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->optometry == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->optometry == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="health_education">स्वास्थ शिक्षण सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="health_education" id="health_education" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->health_education == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->health_education == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="consultation">परामर्श सेवा</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <select name="consultation" id="consultation" class="form-control">
            <option value="छ" {{ (isset($hospital) && $hospital->consultation == "छ") ? "selected" : "" }}>छ</option>
            <option value="छैन" {{ (isset($hospital) && $hospital->consultation == "छैन") ? "selected" : "" }}>छैन</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="specialist">विशेसज्ञ चिकित्सक</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="specialist" placeholder="विशेसज्ञ चिकित्सक"  name="specialist" min="0" @if(isset($hospital)) value="{{ $hospital->specialist }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="physician">सामान्य चिकित्सक</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="physician" placeholder="सामान्य चिकित्सक"  name="physician" min="0" @if(isset($hospital)) value="{{ $hospital->physician }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="assistant">हेल्थ असिस्टेन्ट</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="assistant" placeholder="हेल्थ असिस्टेन्ट"  name="assistant" min="0" @if(isset($hospital)) value="{{ $hospital->assistant }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="nurse">नर्स</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="nurse" placeholder="नर्स"  name="nurse" min="0" @if(isset($hospital)) value="{{ $hospital->nurse }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="worker">अहेब</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="worker" placeholder="अहेब"  name="worker" min="0" @if(isset($hospital)) value="{{ $hospital->worker }}" @endif required>
    </div>
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="midwifery">अनमी</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="midwifery" placeholder="अनमी"  name="midwifery" min="0" @if(isset($hospital)) value="{{ $hospital->midwifery }}" @endif required>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-4 col-md-2 text-right mt-2">
        <label for="technician">ल्याब टेक्निसियन</label>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
        <input type="number" class="form-control" id="technician" placeholder="ल्याब टेक्निसियन"  name="technician" min="0" @if(isset($hospital)) value="{{ $hospital->technician }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>
@endsection
