@extends('layouts.app')

@section('content-header')

@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-8">
            <h3 class="m-0 text-dark">भौगोलिक र प्राकृतिक</h3>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <button class="btn btn-md btn-danger float-right" data-toggle="modal" data-target="#modal-lg"> <i class="fas fa-globe"></i> नगरपालिकाको नक्सा</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-map-marker-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">अक्षांश</span>
                  <span class="info-box-text" style="font-size: 14px;"><b>26°48'41"N - 26°56'6"S</b></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-compass"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">देशान्तर</span>
                  <span class="info-box-text"><b>56°8'E - 56°14'57"W</b></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-map-marked-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">क्षेत्रफल</span>
                  <span class="info-box-text"><b>76.83</b> वर्ग किलोमिटर</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-sort-numeric-up-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">उचाई</span>
                    <span class="info-box-text">लगभग <b>84</b> देखि <b>94</b> मिटर</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-cloud-sun"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">जलवायु</span>
                  <span class="info-box-number">समशितोष्ण र उष्ण</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-home"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">साबिकका गाविस</span>
                  <span class="info-box-number" style="font-size: 10px;">कर्जनहा, बडहरामाल, काल्यानपुर, कालाबन्जर र गौताडि</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
{{--        <div class="col-12 col-sm-6 col-md-6">--}}
{{--            <div class="info-box">--}}
{{--                <span class="info-box-icon bg-info"><i class="fas fa-poll"></i></span>--}}
{{--                <div class="info-box-content">--}}
{{--                  <span class="info-box-text" style="font-size: 14px;"><b>भू उपयोग (%) </b> = कृषि (59), खाली जमीन (0.08), जङ्गल (35.69), झाडी (0.3), चरण (0.49), बगैचा (0.24), नदी-खोला (1.94), पोखरी-ताल (0.03), बगर (2.22)</span>--}}
{{--                </div>--}}
{{--                <!-- /.info-box-content -->--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3>जनसंख्यामा आधारित</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><b>जनसंख्या: </b> <span style="font-size: 12px;">पुरूष (16813), </span></span>
                  <span class="info-box-text" style="font-size: 12px">महिला (14545), जम्मा (31358)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-house-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">घरपरिवारको संख्या</span>
                  <span class="info-box-number">7046</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-people-arrows"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">जनघनत्व</span>
                  <span class="info-box-text" style="font-size: 12px;"><b>832.29</b> जना प्रति वर्ग किलोमिटर</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-restroom"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">लिंग अनुपात</span>
                  <span class="info-box-number">235.09</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-xs-12 col-12">
            <h3>आर्थिक</h3>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">मुख्य पेशा : <span style="font-size: 12px;"><b>वैदेशिक रोजगार<br> र ज्याला मजदूरी</b></span></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><b>उत्पादान (मे.ट): </b> <span style="font-size: 12px;">खाद्यान्न (203437.3), </span></span>
                    <span class="info-box-text" style="font-size: 12px">मासु(16716.8), दूध (2886)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
{{--        <div class="col-12 col-sm-6 col-md-6">--}}
{{--            <div class="info-box">--}}
{{--                <span class="info-box-icon bg-info"><i class="fas fa-balance-scale"></i></span>--}}
{{--                <div class="info-box-content">--}}
{{--                  <span class="info-box-text">उत्पादान (मे.ट)</span>--}}
{{--                  <span class="info-box-text">खाद्यान्न: <b>203437.3</b>, मासु <b>16716.8</b>, दूध: <b>2886</b></span>--}}
{{--                </div>--}}
{{--                <!-- /.info-box-content -->--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-torii-gate"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">मुख्य पर्यटक क्षेत्र</span>
                  <span class="info-box-text"><b>31</b> वटा</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12">
            <h3>सामाजिक</h3>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-school"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><b>शैक्षिक संस्थाको संख्या: </b></span>
                  <span class="info-box-text" style="font-size: 12px">बाल विकास केन्द्र (0), विद्यालय (35), मदरसा (1)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-user-graduate"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><b>साक्षरता दर (%): </b></span>
                  <span class="info-box-text" style="font-size: 12px">पुरूष (68.13), महिला (50.7), जम्मा (59.41)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-hospital"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><b>स्वास्थ्य संस्थाको संख्या: </b></span>
                  <span class="info-box-text" style="font-size: 12px">अस्पताल (1), प्रास्वाके (0), स्वास्थ्य चौकी (4)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-user-injured"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">मुख्य रोगब्याधि</span>
                  <span class="info-box-text">झाडापखाला र ग्यास्ट्रिक</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-child"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">बाल कुपोषण दर:</span>
                  <span class="info-box-number">14.44 %</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-hand-holding-water"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">शुद्ध खानेपानीको उपयोग:</span>
                  <span class="info-box-number">93.89 %</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-vihara"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">मुख्य धार्मिक सम्पदा:</span>
                  <span class="info-box-text"><b>31</b> वटा</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-toilet"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><b>शौचालयको प्रयोग (%): </b><span style="font-size: 12px;">फ्लश भएको</span></span>
                    <span class="info-box-text" style="font-size: 12px">(28.21), साधारण (66.24), नभएको (5.12)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12">
            <h3>भौतिक</h3>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-road"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><b>सडक (किमी): </b> <span style="font-size: 14px;">कालोपत्रे (11), ग्राभेल</span></span>
                    <span class="info-box-text" style="font-size: 14px">(49), कच्चि (84.55), आरसीसी (0)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-5">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-charging-station"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"  style="font-size: 12px"><b>बत्ती बाल्ने उर्जा उपयोग (%): </b> <span style="font-size: 14px;">विध्युत (95.80),</span></span>
                    <span class="info-box-number" style="font-size: 10px">मट्टीतेल (3.60), सोलार (0.03), अन्य (0.50)</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-mobile-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text" style="font-size: 14px">मोबाइल सेवामा <br>पहुँचको अवस्था: <b>38.36%</b></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-12 col-sm-6 col-md-6">--}}
{{--            <div class="info-box">--}}
{{--                <span class="info-box-icon bg-info"><i class="fas fa-dumpster-fire"></i></span>--}}
{{--                <div class="info-box-content">--}}
{{--                  <span class="info-box-text"><b>खाना पकाउने उर्जा उपयोग (%):</b> <span style="font-size: 14px;">दाउरा(७९.०२), मट्टीतेल(०.१४),</span><br></span>--}}
{{--                  <span class="info-box-text" style="font-size: 14px;">एलपी ग्यास(१८), गोबर ग्यास(०.३७), गुइठा(१.८३), विध्युत(०.०४), अन्य(०.५७)</span>--}}
{{--                </div>--}}
{{--                <!-- /.info-box-content -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead class="bg-info">
                            <tr>
                                <th colspan="2" class="text-center">घरको प्रकार (%)</th>
                            </tr>
                        </thead>
                        <tr>
                            <th class="text-center">जग्गाको आधारमा</th>
                            <th class="text-center">छानाको आधारमा</th>
                        </tr>
                        <tr>
                            <td>माटो/ढुङ्गा(१४.४६), सिमेन्ट(३७.४०), फ्रेम स्ट्रक्चर(०.१७), लोड वेयरिङ्ग(०.१३), काठको खम्बा(४६.८८), अन्य(०.९७)</td>
                            <td>फुस/खर(२०.१४), जस्ता/च्यादर(२६.५३), टालय(२३.९७), आरसीसी ढलान(२३.५९), काठ(१.२५), माटो(३.९५), अन्य(०.५८)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12">
            <h3>वातावरण र विपद</h3>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-tree"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">वन क्षेत्र: </span>
                  <span class="info-box-number">६०२.१ हेक्टर</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-hippo"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">महत्वपूर्ण जैविक सम्पदा: </span>
                  <span class="info-box-text" style="font-size: 14px;"><b>काठ, पतिङ्गर र जडिबुटी</b></span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-cloud"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">मुख्य विपद: </span>
                  <span class="info-box-number">शितलहर</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-campground"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">विपदबाट क्षति: </span>
                  <span class="info-box-number">१४,१९,७५,००० /-</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h4 class="modal-title">नगरपालिकाको नक्सा</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">सेटेलाइट तस्बिर</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">जिआइएस नक्सा</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">भू-उपयोग नक्सा</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                        <img src="{{ asset('img/karjanha_satellite.png') }}" class="rounded mx-auto d-block" alt="GIS image" width="700" height="500">
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                        <img src="{{ asset('img/karjanha_gis.jpg') }}" class="rounded mx-auto d-block" alt="GIS image" width="700" height="500">
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                        <img src="{{ asset('img/karjanha_physical.png') }}" class="rounded mx-auto d-block" alt="GIS image">
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger float-right" data-dismiss="modal"> <i class="fas fa-times-circle"></i> close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection
