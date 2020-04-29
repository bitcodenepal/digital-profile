@php
    use \App\Services\NumberConverter;
    $numberConverter = new NumberConverter;
@endphp

@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">सडक मार्गको विद्यमान अवस्थाको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('infrastructure-road.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm" id="road-table">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">वडा नं</th>
                                <th rowspan="2">सडकको नाम</th>
                                <th colspan="2">जोडिने बस्तीहरु</th>
                                <th rowspan="2">लम्बाई(कि. मि.)</th>
                                <th rowspan="2">प्रकार</th>
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
                            @foreach ($roads as $road)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $numberConverter->devanagari($road->ward_no) }}</td>
                                    <td>{{ $road->name }}</td>
                                    <td>{{ $road->from }}</td>
                                    <td>{{ $road->to }}</td>
                                    <td>{{ $numberConverter->devanagari($road->length) }}</td>
                                    <td>{{ $road->type }}</td>
                                    <td>{{ $numberConverter->devanagari($road->population) }}</td>
                                    <td>
                                        <a href="{{ route('infrastructure-road.edit', $road->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $road->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $totalLength += $road->length;
                                    $totalPopulation += $road->population;
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
                                <td></td>
                                <td>{{ $numberConverter->devanagari($totalPopulation) }}</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
        
    <script>

        jQuery(function($) {

            $("#road-table").DataTable();

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('infrastructure-road.destroy', ':id') }}";

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
