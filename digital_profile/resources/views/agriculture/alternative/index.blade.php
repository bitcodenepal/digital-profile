@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">बैकल्पिक बाली सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('alternative.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="alternative-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">वडा नम्बर</th>
                                    <th colspan="3">माछा पालन</th>
                                    <th colspan="2">मौरी पालन</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <td>पोखरी संख्या</td>
                                    <td>क्षेत्रफल</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>घार संख्या</td>
                                    <td>उत्पादन (केजी)</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $pond = $area = $fish = $hive = $honey = 0;
                                @endphp
                                @foreach ($alternatives as $alternative)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($alternative->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($alternative->pond) }}</td>
                                        <td>{{ $numberConverter->devanagari($alternative->area) }}</td>
                                        <td>{{ $numberConverter->devanagari($alternative->fish) }}</td>
                                        <td>{{ $numberConverter->devanagari($alternative->hive) }}</td>
                                        <td>{{ $numberConverter->devanagari($alternative->honey) }}</td>
                                        <td>
                                            <a href="{{ route('alternative.edit', $alternative->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $alternative->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $pond += $alternative->pond;
                                        $area += $alternative->area;
                                        $fish += $alternative->fish;
                                        $hive += $alternative->hive;
                                        $honey += $alternative->honey;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($pond) }}</td>
                                    <td>{{ $numberConverter->devanagari($area) }}</td>
                                    <td>{{ $numberConverter->devanagari($fish) }}</td>
                                    <td>{{ $numberConverter->devanagari($hive) }}</td>
                                    <td>{{ $numberConverter->devanagari($honey) }}</td>
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

            let table = $('#alternative-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5', 
                        title: 'बैकल्पिक बाली विवरण', 
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
                        url = "{{ route('alternative.destroy', ':id') }}";

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