<div class="card-body">
    <div class="row">
        <div class="col-12">
            <h6>१. परिचय</h6>
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="district-name">जिल्लाको नाम</label>
        </div>
        <div class="col-2">
            <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
            <input type="text" class="form-control" id="district-name" placeholder="जिल्लाको नाम लेख्नुहोस्"  name="district_name" value="{{ old('district_name') }}" required>
        </div>
        <div class="col-sm-2 text-right mt-2">
            <label for="municipality-name">स्थानीय तहको नाम</label>
        </div>
        <div class="col-sm-2">
            <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
            <input type="text" class="form-control" id="municipality-name" placeholder="स्थानीय तहको नाम लेख्नुहोस्"  name="municipality_name" value="{{ old('municipality_name') }}" required>
        </div>
        <div class="col-sm-2 text-right mt-2">
            <label for="village-name">वस्तिको नाम</label>
        </div>
        <div class="col-sm-2">
            <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
            <input type="text" class="form-control" id="village-name" placeholder="वस्तिको नाम लेख्नुहोस्"  name="village_name" value="{{ old('village_name') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="ward-number">वडा नं</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="ward-number" placeholder="वार्ड नं"  name="ward_number" min="1" value="{{ old('ward_number') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="geocode">गाउँ केन्द्रको जियोकोड</label>
        </div>
        <div class="col-3">
            <input type="text" class="form-control" id="geocode" placeholder="गाउँ केन्द्रको जियोकोड (अक्षांश, देशान्तर)"  name="geocode" min="1" value="{{ old('geocode') }}" required>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h6>२. व्यक्तिगत घटना विवरण (प्रत्येक वर्षको चैत्रमसान्त सम्म दर्ता भएका विवरण अनुसार)</h6>
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="birth">जन्म संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="birth" placeholder="जन्म संख्या लेख्नुहोस्"  name="birth" min="1" value="{{ old('birth') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="death">मृत्यु संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="death" placeholder="मृत्यु संख्या लेख्नुहोस्"  name="death" min="1" value="{{ old('death') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="marriage">विवाह संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="marriage" placeholder="विवाह संख्या लेख्नुहोस्"  name="marriage" min="1" value="{{ old('marriage') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="divorce">सम्बन्ध विच्छेद (जोडी)</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="divorce" placeholder="सम्बन्ध विच्छेद (जोडी)"  name="divorce" min="1" value="{{ old('divorce') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="immigration-no">बसाईं संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="immigration-no" placeholder="बसाई संख्या लेख्नुहोस्"  name="immigration_no" min="1" value="{{ old('immigration_no') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="immigration-reason">बसाईं कारण</label>
        </div>
        <div class="col-2">
            <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
            <input type="text" class="form-control" id="immigration-reason" placeholder="बसाईं कारण लेख्नुहोस्"  name="immigration_reason" value="{{ old('immigration_reason') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="emigration-number">सराई संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="emigration-number" placeholder="सराई संख्या"  name="emigration_number" min="1" value="{{ old('emigration_number') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="emigration-reason">सराई कारण</label>
        </div>
        <div class="col-2">
            <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
            <input type="text" class="form-control" id="emigration-reason" placeholder="सराई कारण लेख्नुहोस्"  name="emigration_reason" value="{{ old('emigration_reason') }}" required>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h6>३. सामाजिक सुरक्षा कार्यक्रम विवरण (गत आ.व.को १ वर्षको विवरण लिने) <span class="text-muted">    <i>** रकम रु हजारमा</i></span></h6>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 text-center">
            <p>जेष्ठ नागरिक</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="old-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="old-female" placeholder="महिला संख्या"  name="old_female" min="1" value="{{ old('old_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="old-male">पुरुष संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="old-male" placeholder="पुरुष संख्या"  name="old_male" min="1" value="{{ old('old_male') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="old-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="old-amount" placeholder="रकम"  name="old_amount" min="1" value="{{ old('old_amount') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>पूर्ण अपाङ्ग</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="handicapped-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="handicapped-female" placeholder="महिला संख्या"  name="handicapped_female" min="1" value="{{ old('handicapped_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="handicapped-male">पुरुष संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="handicapped-male" placeholder="पुरुष संख्या"  name="handicapped_male" min="1" value="{{ old('handicapped_male') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="handicapped-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="handicapped-amount" placeholder="रकम"  name="handicapped_amount" min="1" value="{{ old('handicapped_amount') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>आंसिक अपाङ्ग</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="aansik-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="aansik-female" placeholder="महिला संख्या"  name="aansik_female" min="1" value="{{ old('aansik_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="aansik-male">पुरुष संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="aansik-male" placeholder="पुरुष संख्या"  name="aansik_male" min="1" value="{{ old('aansik_male') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="aansik-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="aansik-amount" placeholder="रकम"  name="aansik_amount" min="1" value="{{ old('aansik_amount') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>बाल सुरक्षा अनुदान</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="child-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="child-female" placeholder="महिला संख्या"  name="child_female" min="1" value="{{ old('child_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="child-male">पुरुष संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="child-male" placeholder="पुरुष संख्या"  name="child_male" min="1" value="{{ old('child_male') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="child-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="child-amount" placeholder="रकम"  name="child_amount" min="1" value="{{ old('child_amount') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>दलित वर्ग</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="dalit-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="dalit-female" placeholder="महिला संख्या"  name="dalit_female" min="1" value="{{ old('dalit_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="dalit-male">पुरुष संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="dalit-male" placeholder="पुरुष संख्या"  name="dalit_male" min="1" value="{{ old('dalit_male') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="dalit-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="dalit-amount" placeholder="रकम"  name="dalit_amount" min="1" value="{{ old('dalit_amount') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>एकल महिला</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 text-right mt-2">
            <label for="alone-female">महिला संख्या</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="alone-female" placeholder="महिला संख्या"  name="alone_female" min="1" value="{{ old('alone_female') }}" required>
        </div>
        <div class="col-2 text-right mt-2">
            <label for="alone-amount">रकम</label>
        </div>
        <div class="col-2">
            <input type="number" class="form-control" id="alone-amount" placeholder="रकम"  name="alone_amount" min="1" value="{{ old('alone_amount') }}" required>
        </div>
    </div>
</div>

<div class="card-footer">
    <div class="row">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle fa-fw"></i> {{ $buttonText }}</button>
        </div>
    </div>
</div>
