@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">व्यवसायी सीपमूलक तालिम लिने घरपरिवारको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('vocational.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="vocational-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>सिलाई, बुनाई, बुटिक, शृंगार तथा पार्लर</th>
                                    <th>सूचना प्रबिधि, इलेक्ट्रिकल तथा इलेक्ट्रोनिक्स</th>
                                    <th>निर्माण सम्बन्धी</th>
                                    <th>इञ्जिनियरिङ्ग, अटोमोवाइल र मेकानिक्स</th>
                                    <th>कृषि सम्बन्धी</th>
                                    <th>जन स्वास्थ सम्बन्धी</th>
                                    <th>पशु स्वास्थ सम्बन्धी</th>
                                    <th>पर्यटन सम्बन्धी</th>
                                    <th>उद्योग तथा कला सम्बन्धी</th>
                                    <th>अन्य</th>
                                    <th>उल्लेख नभएको</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $tailor = $communication = $construction = $mechanic = $agriculture = $health = $veterinary = $tourism = $industry = $others = $not_included = 0;
                                @endphp
                                @foreach ($vocationals as $vocational)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($vocational->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->tailor) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->communication) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->construction) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->mechanic) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->agriculture) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->health) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->veterinary) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->tourism) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->industry) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->others) }}</td>
                                        <td>{{ $numberConverter->devanagari($vocational->not_included) }}</td>
                                        <td>
                                            <a href="{{ route('vocational.edit', $vocational->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $vocational->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $tailor += $vocational->tailor;
                                        $communication += $vocational->communication;
                                        $construction += $vocational->construction;
                                        $mechanic += $vocational->mechanic;
                                        $agriculture += $vocational->agriculture;
                                        $health += $vocational->health;
                                        $veterinary += $vocational->veterinary;
                                        $tourism += $vocational->tourism;
                                        $industry += $vocational->industry;
                                        $others += $vocational->others;
                                        $not_included += $vocational->not_included;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($tailor) }}</td>
                                    <td>{{ $numberConverter->devanagari($communication) }}</td>
                                    <td>{{ $numberConverter->devanagari($construction) }}</td>
                                    <td>{{ $numberConverter->devanagari($mechanic) }}</td>
                                    <td>{{ $numberConverter->devanagari($agriculture) }}</td>
                                    <td>{{ $numberConverter->devanagari($health) }}</td>
                                    <td>{{ $numberConverter->devanagari($veterinary) }}</td>
                                    <td>{{ $numberConverter->devanagari($tourism) }}</td>
                                    <td>{{ $numberConverter->devanagari($industry) }}</td>
                                    <td>{{ $numberConverter->devanagari($others) }}</td>
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
            let table = $('#vocational-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: '्यवसायी सीपमूलक तालिम लिने घरपरिवारको विवरण',
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
                        url = "{{ route('vocational.destroy', ':id') }}";

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