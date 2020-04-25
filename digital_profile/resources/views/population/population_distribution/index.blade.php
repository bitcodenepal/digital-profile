@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-6">
            <h1 class="text-dark">जनसंख्या वितरणको तालिका</h1>
        </div>
        <div class="col-6">
            <button class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</button>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm" id="population-table">
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
    <script>
        jQuery(function($) {

            $("#create-detail").click(function() {
                $.get("{{ route('population-distribution.create') }}", function(response) {
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
                    url = "{{ route('population-distribution.edit', ':id') }}";

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
                        url = "{{ route('population-distribution.destroy', ':id') }}";

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