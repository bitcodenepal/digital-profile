@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">उत्पादन तथा सेवामूलक उद्योग सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('industry.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="industry-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>उद्योगको नाम तथा ठेगाना</th>
                                    <th>उद्योगको स्वामित्व</th>
                                    <th>उद्योगको प्रकार</th>
                                    <th>जम्मा रोजगारी जना</th>
                                    <th>उत्पादन हुने वस्तु र सेवाको नाम</th>
                                    <th>वार्षिक आम्दानि</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $workers = $economy = 0;
                                @endphp
                                @foreach ($industries as $industry)
                                    <tr>
                                        <td>{{ $industry->name }}</td>
                                        <td>{{ $industry->type }}</td>
                                        <td>{{ $industry->category }}</td>
                                        <td>{{ $numberConverter->devanagari($industry->workers) }}</td>
                                        <td>{{ $industry->product }}</td>
                                        <td>{{ $numberConverter->devanagari($industry->economy) }}</td>
                                        <td>
                                            <a href="{{ route('industry.edit', $industry->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $industry->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $workers += $industry->workers;
                                        $economy += $industry->economy;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($workers) }}</td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($economy) }}</td>
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
        let table = $('#industry-table').DataTable();

        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'उत्पादन तथा सेवामूलक उद्योग सम्बन्धी विवरण',
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
                    url = "{{ route('industry.destroy', ':id') }}";

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
