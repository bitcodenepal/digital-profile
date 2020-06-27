{{-- <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}"> --}}

<div class="row mb-3">
{{--    <div class="col-6" id="export-buttons-2">--}}

{{--    </div>--}}
    <div class="col-12 col-sm-12 col-md-6">
        <a href="{{ route('municipality-land-usage.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle"></i> नयाँ विवरण थप्नुहोस</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-sm" id="land-usage-table">
                <thead class="text-center bg-gradient-danger">
                    <tr>
                        <th>#</th>
                        <th>भूमिको प्रकार</th>
                        <th>क्षेत्रफल (बर्ग कि.मि.)</th>
                        <th>प्रतिशत</th>
                        <th>कार्यहरू</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $totalArea = $totalPercentage = $i = 0;
                    @endphp
                    @foreach ($landUsages as $landUsage)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $landUsage->land_type }}</td>
                            <td>{{ $landUsage->area }}</td>
                            <td>{{ $landUsage->percentage }}</td>
                            <td>
                                <a href="{{ route('municipality-land-usage.edit', $landUsage->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('municipality-land-usage.delete', $landUsage->id) }}" class="btn btn-xs btn-danger delete-land-detail" title="हटाउनुहोस्"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @php
                            $totalArea += $numberConverter->english($landUsage->area);
                            $totalPercentage += $numberConverter->english($landUsage->percentage);
                        @endphp
                    @endforeach
                </tbody>
                <tfoot class="text-center bg-gradient-secondary">
                    <tr>
                        <td></td>
                        <td>जम्मा</td>
                        <td>{{ $numberConverter->devanagari($totalArea) }}</td>
                        <td>{{ $numberConverter->devanagari($totalPercentage) }}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 text-right">
        <span class="text-muted"><i><small>श्रोत: LRMP 1996, नापी विभाग</small></i></span>
    </div>
</div>

{{-- @section('land-usage-script')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>

    <script>

        jQuery(function($) {

            let table = $('#surface-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'धरातलीय अवस्था',
                        className: "btn btn-xs btn-success",
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        footer: true,
                        text: '<i class="fa fa-fw fa-file-excel"></i> एक्सेलको रूपमा डाउनलोड गर्नुहोस्'
                    },
                ],
            }).container().appendTo($('#export-buttons-2'));

        });

    </script>

@endsection --}}
