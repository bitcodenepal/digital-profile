@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/custom_css/buttons.dataTables.min.css') }}"> --}}
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">पैदल मार्ग सम्बन्धि विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('infrastructure-path.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div id="dt-buttonss"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-12 mt-3">
                            <table class="table table-bordered table-hover table-sm" id="path-table">
                                <thead class="text-center bg-gradient-danger">
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">वडा नं</th>
                                        <th rowspan="2">पैदलमार्ग्को नाम</th>
                                        <th colspan="2">जोडिने बस्तीहरु</th>
                                        <th rowspan="2">लम्बाई(कि. मि.)</th>
                                        <th rowspan="2">लाभान्वित जनसंख्या</th>
                                        <th rowspan="2">कार्यहरु</th>
                                    </tr>
                                    <tr>
                                        <th>देखि</th>
                                        <th>सम्म</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                        $totalLength = $totalPopulation = 0;
                                        $i = 1;
                                    @endphp
                                    @foreach ($paths as $path)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $numberConverter->devanagari($path->ward_no) }}</td>
                                            <td>{{ $path->name }}</td>
                                            <td>{{ $path->from }}</td>
                                            <td>{{ $path->to }}</td>
                                            <td>{{ $numberConverter->devanagari($path->length) }}</td>
                                            <td>{{ $numberConverter->devanagari($path->population) }}</td>
                                            <td>
                                                <a href="{{ route('infrastructure-path.edit', $path->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $path->id }}><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @php
                                            $totalLength += $path->length;
                                            $totalPopulation += $path->population;
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center bg-gradient-secondary">
                                    <tr>
                                        <td></td>
                                        <td>जम्मा</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $numberConverter->devanagari($totalLength) }}</td>
                                        <td>{{ $numberConverter->devanagari($totalPopulation) }}</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><small><i>** श्रोत: समूह छलफल तथा जानकार व्यक्ति अन्तरवार्ता, २०७५</i></small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    {{-- <script src="{{ asset('js/custom_js/buttons.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/custom_js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/custom_js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/custom_js/vfs_fonts.js') }}"></script> --}}
    <script>

        jQuery(function($) {

            $("#path-table").DataTable()
            // let table = $("#path-table").DataTable();

            // new $.fn.dataTable.Buttons(table, {
            //     buttons : [
            //         {
            //             "extend": "pdf",
            //             "text": "Export as PDF",
            //             "filename": "Report Name",
            //             "className": "btn btn-green",
            //             "charset": "utf-8",
            //             "bom": "true",
            //             init: function(api, node, config) {
            //                 $(node).removeClass("btn-default");
            //             }
            //         }
            //     ]
            // }).container().appendTo($('#dt-buttons'));

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('infrastructure-path.destroy', ':id') }}";

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
