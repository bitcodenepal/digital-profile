@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">जातिगत आधारमा जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('caste.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-bordered table-hover table-sm" id="caste-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>पहाडी ब्राह्मण/क्षेत्री</th>
                                    <th>तराई ब्राह्मण/क्षेत्री</th>
                                    <th>पहाडी आदीवासी/जनजाती</th>
                                    <th>तराई आदीवासी/जनजाती</th>
                                    <th>पहाडी दलित</th>
                                    <th>तराई दलित</th>
                                    <th>मुस्लिम</th>
                                    <th>पहाडी अन्य</th>
                                    <th>तराई अन्य</th>
                                    <th>उल्लेख नभएको</th>
                                    <th>जम्मा</th>
                                    <th>कार्यहरू</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $hillBrahmin = $teraiBrahmin = $hillTribe = $teraiTribe = $hillLow = $teraiLow = $muslim = $hillOthers = $teraiOthers = $notIncluded = $total = $totalHillBrahmin = $totalTeraiBrahmin = $totalHillTribe = $totalTeraiTribe = $totalHillLow = $totalTeraiLow = $totalMuslim = $totalHillOthers = $totalTeraiOthers = $totalNotIncluded = 0;
                                @endphp
                                @foreach ($castes as $caste)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($caste->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->hill_brahmin) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->terai_brahmin) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->hill_tribe) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->terai_tribe) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->hill_low) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->terai_low) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->muslim) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->hill_others) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->terai_others) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->not_included) }}</td>
                                        <td>{{ $numberConverter->devanagari($caste->total) }}</td>
                                        <td>
                                            <a href="{{ route('caste.edit', $caste->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $caste->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $hillBrahmin += $caste->hill_brahmin;
                                        $teraiBrahmin += $caste->terai_brahmin;
                                        $hillTribe += $caste->hill_tribe;
                                        $teraiTribe += $caste->terai_tribe;
                                        $hillLow += $caste->hill_low;
                                        $teraiLow += $caste->terai_low;
                                        $muslim += $caste->muslim;
                                        $hillOthers += $caste->hill_others;
                                        $teraiOthers += $caste->terai_others;
                                        $notIncluded += $caste->not_included;
                                        $total += $caste->total;
                                    @endphp
                                @endforeach
                                @php
                                    $totalHillBrahmin = ($hillBrahmin != 0) ? round(($hillBrahmin/$total)*100, 2) : 0;
                                    $totalTeraiBrahmin = ($teraiBrahmin != 0) ? round(($teraiBrahmin/$total)*100, 2) : 0;
                                    $totalHillTribe = ($hillTribe != 0) ? round(($hillTribe/$total)*100, 2) : 0;
                                    $totalTeraiTribe = ($teraiTribe != 0) ? round(($teraiTribe/$total)*100, 2) : 0;
                                    $totalHillLow = ($hillLow != 0) ? round(($hillLow/$total)*100, 2) : 0;
                                    $totalTeraiLow = ($teraiLow != 0) ? round(($teraiLow/$total)*100, 2) : 0;
                                    $totalMuslim = ($muslim != 0) ? round(($muslim/$total)*100, 2) : 0;
                                    $totalHillOthers = ($hillOthers != 0) ? round(($hillOthers/$total)*100, 2) : 0;
                                    $totalTeraiOthers = ($teraiOthers != 0) ? round(($teraiOthers/$total)*100, 2) : 0;
                                    $totalNotIncluded = ($notIncluded != 0) ? round(($notIncluded/$total)*100, 2) : 0;
                                @endphp
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($hillBrahmin) }}</td>
                                    <td>{{ $numberConverter->devanagari($teraiBrahmin) }}</td>
                                    <td>{{ $numberConverter->devanagari($hillTribe) }}</td>
                                    <td>{{ $numberConverter->devanagari($teraiTribe) }}</td>
                                    <td>{{ $numberConverter->devanagari($hillLow) }}</td>
                                    <td>{{ $numberConverter->devanagari($teraiLow) }}</td>
                                    <td>{{ $numberConverter->devanagari($muslim) }}</td>
                                    <td>{{ $numberConverter->devanagari($hillOthers) }}</td>
                                    <td>{{ $numberConverter->devanagari($teraiOthers) }}</td>
                                    <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
                                    <td>{{ $numberConverter->devanagari($total) }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>प्रतिसत</td>
                                    <td>{{ $numberConverter->devanagari($totalHillBrahmin) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalTeraiBrahmin) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalHillTribe) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalTeraiTribe) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalHillLow) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalTeraiLow) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalMuslim) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalHillOthers) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalTeraiOthers) }} %</td>
                                    <td>{{ $numberConverter->devanagari($totalNotIncluded) }} %</td>
                                    <td>{{ (count($castes) == 0) ? $numberConverter->devanagari(0) : $numberConverter->devanagari(100) }}</td>
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

            let table = $('#caste-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'जातिगत जनसंख्या विवरण',
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
                        url = "{{ route('caste.destroy', ':id') }}";

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
