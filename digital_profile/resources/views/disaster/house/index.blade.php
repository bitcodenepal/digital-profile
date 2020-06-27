@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">भवन मापदण्ड तथा भुकम्प प्रतिरोधी घरको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('house.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            {{-- <form action="{{ route('export.population-distribution') }}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-link" value="pdf">
                            </form> --}}
                        </div>
                        <div class="col-6 text-right mb-3" id="export-buttons">

                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-bordered table-sm" id="house-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>मापदण्ड अनुसार बनेको</th>
                                    <th>मापदण्ड अनुसार नबनेको</th>
                                    <th>जम्मा</th>
                                    <th>भुकम्प प्रतिरोधी भएको</th>
                                    <th>भुकम्प प्रतिरोधी नभएको</th>
                                    <th>जम्मा</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $safe_built = $unsafe_built = $total_safety = $built_for_quakes = $not_built_for_quakes = $total_quakes = 0;
                                @endphp
                                @foreach ($houses as $house)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($house->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->safe_built) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->unsafe_built) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->total_safety) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->built_for_quakes) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->not_built_for_quakes) }}</td>
                                        <td>{{ $numberConverter->devanagari($house->total_quakes) }}</td>
                                        <td>
                                            <a href="{{ route('house.edit', $house->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $house->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $safe_built += $house->safe_built;
                                        $unsafe_built += $house->unsafe_built;
                                        $total_safety += $house->total_safety;
                                        $built_for_quakes += $house->built_for_quakes;
                                        $not_built_for_quakes += $house->not_built_for_quakes;
                                        $total_quakes += $house->total_quakes;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($safe_built) }}</td>
                                    <td>{{ $numberConverter->devanagari($unsafe_built) }}</td>
                                    <td>{{ $numberConverter->devanagari($total_safety) }}</td>
                                    <td>{{ $numberConverter->devanagari($built_for_quakes) }}</td>
                                    <td>{{ $numberConverter->devanagari($not_built_for_quakes) }}</td>
                                    <td>{{ $numberConverter->devanagari($total_quakes) }}</td>
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
            let table = $('#house-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'भवन मापदण्ड तथा भुकम्प प्रतिरोधी घरको विवरण',
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
                        url = "{{ route('house.destroy', ':id') }}";

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
