@extends('layouts.app')
    
@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-6">
            <h1 class="text-dark">जनघनत्वको तालिका</h1>
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
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">वडा नं</th>
                                <th colspan="2">जनसंख्या विवरण</th>
                                <th colspan="2">क्षेत्रफल विवरण</th>
                                <th rowspan="2">जनघनत्व (प्रति वकिमी)</th>
                                <th rowspan="2">कार्यहरू</th>
                            </tr>
                            <tr>
                                <th>जनसंख्या</th>
                                <th>प्रतिशत</th>
                                <th>क्षेत्रफल (वकिमी)</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $totalPopulation = $totalArea = $totalPopulationDensity = $totalPopulationPercent = $totalAreaPercent = $count = 0;
                                $i = 1;
                            @endphp
                            @foreach ($populationDensities as $populationDensity)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $populationDensity->ward_no }}</td>
                                    <td>{{ $populationDensity->population }}</td>
                                    <td>{{ $populationDensity->population_percent }}</td>
                                    <td>{{ $populationDensity->area }}</td>
                                    <td>{{ $populationDensity->area_percent }}</td>
                                    <td>{{ $populationDensity->population_density }}</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्" data-id={{ $populationDensity->id }}><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $populationDensity->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $totalPopulation += $numberConverter->english($populationDensity->population);
                                    $totalPopulationPercent += $numberConverter->english($populationDensity->population_percent);
                                    $totalArea += $numberConverter->english($populationDensity->area);
                                    $totalAreaPercent += $numberConverter->english($populationDensity->area_percent);
                                    $totalPopulationDensity += $numberConverter->english($populationDensity->population_density);
                                    $count++;
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td></td>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($totalPopulation) }}</td>
                                <td>{{ $numberConverter->devanagari($totalPopulationPercent) }}</td>
                                <td>{{ $numberConverter->devanagari($totalArea)}}</td>
                                <td>{{ $numberConverter->devanagari($totalAreaPercent) }}</td>
                                <td>{{ ($count != 0 ) ? $numberConverter->devanagari(round($totalPopulationDensity/$count, 2)) : 0 }}</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><i><small>** श्रोत:  केन्द्रिय तथ्यांक विभाग, २०६८ र घरपरिवार सर्वेक्षण २०७५</small></i></span>
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

        jQuery(function() {
            $("#create-detail").click(function() {
                $.get("{{ route('population-density.create') }}", function(response) {
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
                    url = "{{ route('population-density.edit', ':id') }}";

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
                        url = "{{ route('population-density.destroy', ':id') }}";

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
