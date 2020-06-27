@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-6 col-md-6">
            <h1 class="text-dark">जनसंख्या वितरणको तालिका</h1>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <button class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</button>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
{{--                            <a href="{{ route('export.population-distribution') }}" class="btn btn-xs btn-warning" target="_blank">--}}
{{--                                <i class="fas fa-file-pdf fa-fw"></i> PDF को रूपमा डाउनलोड गर्नुहोस्--}}
{{--                            </a>--}}
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 text-right mb-3" id="export-buttons">

                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-bordered table-sm" id="distribution-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">वडा नं</th>
                                    <th rowspan="2">घरपरिवार</th>
                                    <th colspan="3">जनसंख्या</th>
                                    <th rowspan="2">औषत परिवार</th>
                                    <th rowspan="2">लैंगिक अनुपात</th>
                                    <th rowspan="2">कार्यहरू</th>
                                </tr>
                                <tr>
                                    <th>जम्मा</th>
                                    <th>पुरुष</th>
                                    <th>महिला</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @if(!empty($populationDistributions))
                                    @php($i=1)
                                    @foreach ($populationDistributions as $populationDistribution)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $populationDistribution->ward_no }}</td>
                                            <td>{{ $populationDistribution->household_number }}</td>
                                            <td>{{ $populationDistribution->total }}</td>
                                            <td>{{ $populationDistribution->male_number }}</td>
                                            <td>{{ $populationDistribution->female_number }}</td>
                                            <td>{{ $populationDistribution->average_family }}</td>
                                            <td>{{ $populationDistribution->gender_ratio }}</td>
                                            <td>
                                                <button class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्" data-id={{ $populationDistribution->id }}><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $populationDistribution->id }}><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @php($i++)
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td></td>
                                    <td>जम्मा</td>
                                    <td>{{ $totalHouseHoldNumber }}</td>
                                    <td>{{ $totalPopulation }}</td>
                                    <td>{{ $totalMale }}</td>
                                    <td>{{ $totalFemale }}</td>
                                    <td>{{ $totalAverageFamily }}</td>
                                    <td>{{ $totalGenderRatio }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><i><small>** श्रोत: घरपरिवार सर्वेक्षण २०७५ अनुसार</small></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create-detail-modal">
        <div class="modal-dialog">
          <div class="modal-content">
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="edit-detail-modal">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    {{-- <script src="{{ asset('js/datatableButtons/buttons.bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    {{-- <script src="{{ asset('js/datatableButtons/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/vfs_fonts.js') }}"></script> --}}
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>
    {{-- <script src="{{ asset('js/datatableButtons/buttons.print.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/datatableButtons/buttons.colVis.min.js') }}"></script> --}}

    <script>
        jQuery(function($) {

            let table = $('#distribution-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    // {
                    //     extend: 'pdfHtml5',
                    //     title: 'Collections List',
                    //     exportOptions: {
                    //         columns: ':not(:last-child)',
                    //         stripNewlines: false,
                    //     },
                    // },
                    {
                        extend: 'excelHtml5',
                        title: 'जनसंख्या वितरण',
                        className: "btn btn-xs btn-success",
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        footer: true,
                        text: '<i class="fa fa-fw fa-file-excel"></i> एक्सेलको रूपमा डाउनलोड गर्नुहोस्'
                    },
                    // {
                    //     extend: 'print',
                    //     title: 'Collections List',
                    //     exportOptions: {
                    //         columns: ':not(:last-child)',
                    //     },
                    // },
                ],
            }).container().appendTo($('#export-buttons'));

            // var newExportAction = function (e, dt, button, config) {
            //     var self = this;
            //     var oldStart = dt.settings()[0]._iDisplayStart;
            //     dt.one('preXhr', function (e, s, data) {
            //         $('#mainBox').addClass('box-loader');
            //         $('#loader1').removeAttr('hidden');
            //         data.start = 0;
            //         dt.one('preDraw', function (e, settings) {
            //             if(button[0].className=="btn btn-default buttons-pdf buttons-html5"){
            //             $.each(settings.json.data, function(key, htmlContent){
            //                 settings.json.data[key].id = key+1;
            //                 settings.json.data[key].company_name = $(settings.json.data[key].company_name)[0].textContent;
            //                 settings.json.data[key].employee_name = $(settings.json.data[key].employee_name)[0].textContent;
            //             });
            //             customExportAction(config, settings);
            //             }else{
            //             oldExportAction(self, e, dt, button, config);
            //             }
            //             // oldExportAction(self, e, dt, button, config);
            //             dt.one('preXhr', function (e, s, data) {
            //                 settings._iDisplayStart = oldStart;
            //                 data.start = oldStart;
            //                 $('#mainBox').removeClass('box-loader');
            //                 $('#loader1').attr('hidden', 'hidden');
            //             });
            //             setTimeout(dt.ajax.reload, 0);
            //             return false;
            //         });
            //     });
            //     dt.ajax.reload();
            // }

            // function customExportAction(config, settings){
            //     $('#exportedData').val(JSON.stringify(settings.json));
            //     $('#pageTitle').val(config.title);
            //     $('#pdf-generate').submit();
            // }

            $("#create-detail").click(function() {
                $.get("{{ route('distribution.create') }}", function(response) {
                    $("#create-detail-modal .modal-content").html(response);
                    $('#create-detail-modal').modal({
                        display: 'show',
                        backdrop: 'static',
                        keyboard: false
                    });
                });
            });

            $(".edit-detail").click(function() {
                let id = this.dataset.id,
                    url = "{{ route('distribution.edit', ':id') }}";

                url = url.replace(":id", id);

                $.get(url, function(response) {
                    $("#edit-detail-modal .modal-content").html(response);
                    $('#edit-detail-modal').modal({
                        display: 'show',
                        backdrop: 'static',
                        keyboard: false
                    });
                });

            });

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('distribution.destroy', ':id') }}";

                    url = url.replace(":id", id);

                    $.ajax({
                        url: url,
                        type: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(response) {
                            alert(response);
                            location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection
