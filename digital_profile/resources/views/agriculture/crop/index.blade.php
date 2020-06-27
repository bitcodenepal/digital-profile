@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">अन्न, दलहन र तेल्हल बाली उत्पादन र बिक्री सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('crop.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="crop-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">वडा नम्बर</th>
                                    <th colspan="3">अन्नवाली</th>
                                    <th colspan="3">दलहन बाली</th>
                                    <th colspan="3">तेल्हल बाली</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $crop_area = $crop_production = $crop_sold = $pulse_area = $pulse_production = $pulse_sold = $oil_area = $oil_production = $oil_sold = 0;
                                @endphp
                                @foreach ($crops as $crop)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($crop->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->crop_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->crop_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->crop_sold) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->pulse_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->pulse_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->pulse_sold) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->oil_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->oil_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($crop->oil_sold) }}</td>
                                        <td>
                                            <a href="{{ route('crop.edit', $crop->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $crop->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $crop_area += $crop->crop_area;
                                        $crop_production += $crop->crop_production;
                                        $crop_sold += $crop->crop_sold;
                                        $pulse_area += $crop->pulse_area;
                                        $pulse_production += $crop->pulse_production;
                                        $pulse_sold += $crop->pulse_sold;
                                        $oil_area += $crop->oil_area;
                                        $oil_production += $crop->oil_production;
                                        $oil_sold += $crop->oil_sold;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($crop_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($crop_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($crop_sold) }}</td>
                                    <td>{{ $numberConverter->devanagari($pulse_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($pulse_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($pulse_sold) }}</td>
                                    <td>{{ $numberConverter->devanagari($oil_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($oil_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($oil_sold) }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>

    <script>

        jQuery(function($) {
            let table = $('#crop-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'अन्न, दलहन र तेल्हल बाली',
                        className: "btn btn-xs btn-success",
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        footer: true,
                        text: '<i class="fa fa-fw fa-file-excel"></i> एक्सेलको रूपमा डाउनलोड गर्नुहोस्'
                    },
                ],
            }).container().appendTo($('#export-buttons'));

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('crop.destroy', ':id') }}";

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
