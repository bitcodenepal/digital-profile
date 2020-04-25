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
                            </tr>
                            <tr>
                                <th>जनसंख्या</th>
                                <th>प्रतिशत</th>
                                <th>क्षेत्रफल (वकिमी)</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">

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
        });

    </script>
    
@endsection
