@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7 mb-3">
            <h1 class="text-dark">व्यक्तिगत घटना अनुसार जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('event.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="event-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">वडा नम्बर</th>
                                    <th rowspan="2">जन्म</th>
                                    <th rowspan="2">मृत्यु</th>
                                    <th rowspan="2">विवाह</th>
                                    <th colspan="2">बसाईसराई</th>
                                    <th rowspan="2">कार्यहरू</th>
                                </tr>
                                <tr>
                                    <th>आएको</th>
                                    <th>गएको</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $birth = $death = $marriage = $immigration = $emigration = 0;
                                @endphp
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($event->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($event->birth) }}</td>
                                        <td>{{ $numberConverter->devanagari($event->death) }}</td>
                                        <td>{{ $numberConverter->devanagari($event->marriage) }}</td>
                                        <td>{{ $numberConverter->devanagari($event->immigration) }}</td>
                                        <td>{{ $numberConverter->devanagari($event->emigration) }}</td>
                                        <td>
                                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $event->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $birth += $event->birth;
                                        $death += $event->death;
                                        $marriage += $event->marriage;
                                        $immigration += $event->immigration;
                                        $emigration += $event->emigration;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($birth) }}</td>
                                    <td>{{ $numberConverter->devanagari($death) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage) }}</td>
                                    <td>{{ $numberConverter->devanagari($immigration) }}</td>
                                    <td>{{ $numberConverter->devanagari($emigration) }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><i><small>** श्रोत: घरपरिवार सर्वेक्षण, २०७५</small></i></span>
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
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>

    <script>

        jQuery(function($) {

            let table = $('#event-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'व्यक्तिगत घटना विवरण',
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
                        url = "{{ route('event.destroy', ':id') }}";

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
