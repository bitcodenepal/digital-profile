@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7 mb-3">
            <h1 class="text-dark">अपाङ्गताको आधारमा जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('handicap.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm" id="handicap-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>शारिरीक अपाङ्गता</th>
                                    <th>बौद्विक अपाङ्गता</th>
                                    <th>आँखा नदेख्ने</th>
                                    <th>कान नसुन्ने</th>
                                    <th>बोली अक्मकिने</th>
                                    <th>मनोसामाजिक अपाङ्गता</th>
                                    <th>अपाङ्ग नभएको</th>
                                    <th>उल्लेख नभएको</th>
                                    <th>जम्मा</th>
                                    <th>कार्यहरू</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $physical = $mental = $blind = $deaf = $dumb = $psycho = $healthy = $notIncluded = $total = $totalPhysical = $totalMental = $toalBlind = $totalDeaf = $totalDumb = $totalPsycho = $totalHealthy = $totalNotIncluded = 0;
                                @endphp
                                @foreach ($handicaps as $handicap)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($handicap->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->physical) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->mental) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->blind) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->deaf) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->dumb) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->psycho) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->healthy) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->not_included) }}</td>
                                        <td>{{ $numberConverter->devanagari($handicap->total) }}</td>
                                        <td>
                                            <a href="{{ route('handicap.edit', $handicap->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $handicap->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $physical += $handicap->physical;
                                        $mental += $handicap->mental;
                                        $blind += $handicap->blind;
                                        $deaf += $handicap->deaf;
                                        $dumb += $handicap->dumb;
                                        $psycho += $handicap->psycho;
                                        $healthy += $handicap->healthy;
                                        $notIncluded += $handicap->not_included;
                                        $total += $handicap->total;
                                    @endphp
                                @endforeach
                                @php
                                    $totalPhysical = ($physical != 0) ? round(($physical/$total)*100, 2) : 0;
                                    $totalMental = ($mental != 0) ? round(($mental/$total)*100, 2) : 0;
                                    $toalBlind = ($blind != 0) ? round(($blind/$total)*100, 2) : 0;
                                    $totalDeaf = ($deaf != 0) ? round(($deaf/$total)*100, 2) : 0;
                                    $totalDumb = ($dumb != 0) ? round(($dumb/$total)*100, 2) : 0;
                                    $totalPsycho = ($psycho != 0) ? round(($psycho/$total)*100, 2) : 0;
                                    $totalHealthy = ($healthy != 0) ? round(($healthy/$total)*100, 2) : 0;
                                    $totalNotIncluded = ($notIncluded != 0) ? round(($notIncluded/$total)*100, 2) : 0;
                                @endphp
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($physical) }}</td>
                                    <td>{{ $numberConverter->devanagari($mental) }}</td>
                                    <td>{{ $numberConverter->devanagari($blind) }}</td>
                                    <td>{{ $numberConverter->devanagari($deaf) }}</td>
                                    <td>{{ $numberConverter->devanagari($dumb) }}</td>
                                    <td>{{ $numberConverter->devanagari($psycho) }}</td>
                                    <td>{{ $numberConverter->devanagari($healthy) }}</td>
                                    <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
                                    <td>{{ $numberConverter->devanagari($total) }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>प्रतिसत</td>
                                    <td>{{ $numberConverter->devanagari($totalPhysical) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalMental) }} %</td>
                                    <td>{{ $numberConverter->devanagari($toalBlind) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalDeaf) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalDumb) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalPsycho) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalHealthy) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalNotIncluded) }} %</td>
                                    <td>{{ (count($handicaps) == 0) ? $numberConverter->devanagari(0) : $numberConverter->devanagari(100) }}</td>
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

            let table = $('#handicap-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'अपाङ्गताको विवरण',
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
                        url = "{{ route('handicap.destroy', ':id') }}";

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
