@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">वार्षिक आम्दानी अनुसार घरपरिवारको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('income.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="income-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>५० हजार भन्दा कम</th>
                                    <th>(५०-१५०) हजार</th>
                                    <th>(१५०-२५०) हजार</th>
                                    <th>(२५०-५००) हजार</th>
                                    <th>५०० हजार बन्दा माथी</th>
                                    <th>उल्लेख नभएको</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $lowest = $below_average = $average = $above_average = $highest =  $not_included = 0;
                                @endphp
                                @foreach ($incomes as $income)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($income->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->lowest) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->below_average) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->average) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->above_average) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->highest) }}</td>
                                        <td>{{ $numberConverter->devanagari($income->not_included) }}</td>
                                        <td>
                                            <a href="{{ route('income.edit', $income->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $income->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $lowest += $income->lowest;
                                        $below_average += $income->below_average;
                                        $average += $income->average;
                                        $above_average += $income->above_average;
                                        $highest += $income->highest;
                                        $not_included += $income->not_included;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($lowest) }}</td>
                                    <td>{{ $numberConverter->devanagari($below_average) }}</td>
                                    <td>{{ $numberConverter->devanagari($average) }}</td>
                                    <td>{{ $numberConverter->devanagari($above_average) }}</td>
                                    <td>{{ $numberConverter->devanagari($highest) }}</td>
                                    <td>{{ $numberConverter->devanagari($not_included) }}</td>
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
            let table = $('#income-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'वार्षिक आम्दानी अनुसार घरपरिवारको विवरण',
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
                        url = "{{ route('income.destroy', ':id') }}";

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
