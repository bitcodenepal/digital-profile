@extends('survey_data.index')

@section('table')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">डाटा फिल्टर गर्नुहोस्</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('survey-data.index') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 mb-3">
                                <select name="ward_no" id="ward-no" class="form-control ward-no">
                                    <option value="">-- वार्ड नम्बर चयन गर्नुहोस् --</option>
                                    <option value="1">१</option>
                                    <option value="2">२</option>
                                    <option value="3">३</option>
                                    <option value="4">४</option>
                                    <option value="5">५</option>
                                    <option value="6">६</option>
                                    <option value="7">७</option>
                                    <option value="8">८</option>
                                    <option value="9">९</option>
                                    <option value="10">१०</option>
                                    <option value="11">११</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-3" id="locality-div">
                                
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-3" id="income-div">
                                <select name="annual_income" id="income" class="form-control">
                                    <option value="">-- वार्षिक आयको आधारमा चयन गर्नुहोस् --</option>
                                    <option value="<=">१ लाख भन्दा कम वार्षिक आय</option>
                                    <option value=">">१ लाख भन्दा बढी वार्षिक आय</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 mb-3">
                                <select name="mother_tongue" id="mother-tongue" class="form-control mother-tongue">
                                    <option value="">-- भाषा छनोट गर्नुस --</option>
                                    <option value="नेपाली">नेपाली</option>
                                    <option value="मैथिली">मैथिली</option>
                                    <option value="भाेजपुरी">भाेजपुरी</option>
                                    <option value="थारू">थारू</option>
                                    <option value="हिन्दी">हिन्दी</option>
                                    <option value="उर्दु">उर्दु</option>
                                    <option value="बान्तवा">बान्तवा</option>
                                    <option value="लिम्बु">लिम्बु</option>
                                    <option value="तामाङ">तामाङ</option>
                                    <option value="अन्य">अन्य</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-3">
                                <select name="caste" id="caste" class="form-control caste">
                                    <option value="">-- जाति छनोट गर्नुस --</option>
                                    <option value="पहाडी ब्राम्हण्, क्षेत्री, ठकुरी, सन्यासी">पहाडी ब्राम्हण्, क्षेत्री, ठकुरी, सन्यासी</option>
                                    <option value="तराई ब्राम्हण्, क्षेत्री, राजपुत">तराई ब्राम्हण्, क्षेत्री, राजपुत</option>
                                    <option value="पहाडी आदिवासी जनजाति">पहाडी आदिवासी जनजाति</option>
                                    <option value="तराई आदिवासी जनजाति">तराई आदिवासी जनजाति</option>
                                    <option value="मधेशी">मधेशी</option>
                                    <option value="पहाडी दलित">पहाडी दलित</option>
                                    <option value="तराई दलित">तराई दलित</option>
                                    <option value="थारू">थारू</option>
                                    <option value="मुस्लिम">मुस्लिम</option>
                                    <option value="पहाडी अन्य">पहाडी अन्य</option>
                                    <option value="तराई अन्य">तराई अन्य</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-3">
                                <select name="religion" id="religion" class="form-control religion">
                                    <option value="">-- धर्म छनोट गर्नुस --</option>
                                    <option value="हिन्दु">हिन्दु</option>
                                    <option value="बाैद्द">बाैद्द</option>
                                    <option value="र्इस्लाम (मुस्लिम)">र्इस्लाम (मुस्लिम)</option>
                                    <option value="इसार्इ (क्रिस्चियन)">इसार्इ (क्रिस्चियन)</option>
                                    <option value="किरात">किरात</option>
                                    <option value="जैन">जैन</option>
                                    <option value="अन्य">अन्य</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">फिल्टर गर्नुहोस्</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            {{--                            <a href="{{ route('export.population-distribution') }}" class="btn btn-xs btn-warning" target="_blank">--}}
            {{--                                <i class="fas fa-file-pdf fa-fw"></i> PDF को रूपमा डाउनलोड गर्नुहोस्--}}
            {{--                            </a>--}}
        </div>
        <div class="col-12 col-sm-6 col-md-6 text-right mb-3" id="export-buttons">

        </div>
    </div>
    <div class="table-responsive mb-4">
        <table class="table table-hover table-bordered table-sm" id="survey-table">
            <thead class="text-center bg-gradient-danger">
                <tr>
                    <th>#</th>
                    <th>सर्वेक्षणकर्ताको नाम</th>
                    <th>सर्वेक्षण मिति</th>
                    <th>घरमुलीको नाम</th>
                    <th>वार्ड नम्बर</th>
                    <th>वस्तीकाे नाम</th>
                    <th>मार्गकाे नाम</th>
                    <th>जम्मा परिवार संख्य</th>
                    <th>जम्मा महिला संख्या</th>
                    <th>जम्मा पुरुष संख्या</th>
                    <th>खानेपानीकाे मुख्य श्राेत</th>
                    <th>खाना पकाउन प्रयाेग गर्ने मुख्य इन्धन</th>
                    <th>घरमा प्रयाेग हुने बत्तिकाे श्राेत</th>
                    <th>शाैचालय</th>
                    <th>परिवारकाे सरदर वार्षिक अाम्दानी</th>
                    <th>बाेल्ने भाषा</th>
                    <th>जातजाती</th>
                    <th>धर्म</th>
                    <th>कार्यहरू</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($surveyData as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $data->surveyor_name }}</td>
                        <td>{{ $data->survey_date }}</td>
                        <td>{{ $data->owner_name }}</td>
                        <td>{{ $data->ward_no }}</td>
                        <td>{{ $data->locality }}</td>
                        <td>{{ $data->path_name }}</td>
                        <td>{{ $data->members }}</td>
                        <td>{{ $data->female }}</td>
                        <td>{{ $data->male }}</td>
                        <td>{{ $data->drinking_water }}</td>
                        <td>{{ $data->fuel }}</td>
                        <td>{{ $data->electricity_source }}</td>
                        <td>{{ $data->toilet }}</td>
                        <td>{{ $data->annual_income }}</td>
                        <td>{{ $data->mother_tongue }}</td>
                        <td>{{ $data->caste }}</td>
                        <td>{{ $data->religion }}</td>
                        <td>
                            <a href="{{ route('survey-data.show', $data->id) }}" class="btn btn-xs btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('survey-script')
    <script>

        jQuery(function($) {
            $('.ward-no').on('change', function() {
                let id = $(this).val(),
                    url = "{{ route('get.locality', ':id') }}";

                url = url.replace(":id", id);

                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        let selectDiv = '<select name="locality" id="locality" class="form-control">';
                        $.each(response, function(index, value) {
                            selectDiv += '<option value="'+value+'">'+value+'</option>';
                        });
                        selectDiv += '</select>';

                        $('#locality-div').html(selectDiv);
                    }
                });
            });

            let table = $('#survey-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'सर्वेक्षणबाट लिइएको डाटा', 
                        className: "btn btn-xs btn-success",
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        footer: true,
                        text: '<i class="fa fa-fw fa-file-excel"></i> एक्सेलको रूपमा डाउनलोड गर्नुहोस्'
                    },
                ],
            }).container().appendTo($('#export-buttons'));

            
        });

    </script>
@endsection
