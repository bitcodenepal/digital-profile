@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">सिंचाइ सुबिधा सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('irrigation.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="irrigation-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>सिंचाइ सुबिधा वा आयोजनाको नाम</th>
                                    <th>वडा नम्बर</th>
                                    <th>सिंचाइको किसिम</th>
                                    <th>स्रोतको इकाई</th>
                                    <th>स्रोतको परिमाण</th>
                                    <th>सिंचाइको उपलब्धता</th>
                                    <th>लाभान्वित घरधुरी</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $quantity = $beneficial = 0;
                                @endphp
                                @foreach ($irrigations as $irrigation)
                                    <tr>
                                        <td>{{ $irrigation->name }}</td>
                                        <td>{{ $numberConverter->devanagari($irrigation->ward_no) }}</td>
                                        <td>{{ $irrigation->type }}</td>
                                        <td>{{ $irrigation->unit }}</td>
                                        <td>{{ $numberConverter->devanagari($irrigation->quantity) }}</td>
                                        <td>{{ $irrigation->availability }}</td>
                                        <td>{{ $numberConverter->devanagari($irrigation->beneficial) }}</td>
                                        <td>
                                            <a href="{{ route('irrigation.edit', $irrigation->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $irrigation->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $quantity += $irrigation->quantity;
                                        $beneficial += $irrigation->beneficial;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($quantity) }}</td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($beneficial) }}</td>
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
        let table = $('#irrigation-table').DataTable();

        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'सिंचाइ सुबिधा सम्बन्धी विवरण',
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
                    url = "{{ route('irrigation.destroy', ':id') }}";

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
