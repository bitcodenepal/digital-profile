@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">आधुनिक सुविधामा पहुँच सम्बन्धि विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('communication.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                        <table class="table table-hover table-bordered table-sm" id="communication-table">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>रेडियो</th>
                                    <th>टेलिभिजन</th>
                                    <th>मोबाइल / टेलिफोन</th>
                                    <th>कम्प्युटर</th>
                                    <th>इन्टरनेट</th>
                                    <th>रेफ्रीजरेटर</th>
                                    <th>मोटरसाइकल</th>
                                    <th>मोटर / कार</th>
                                    <th>बस / ट्रक</th>
                                    <th>कुनै नभएको</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $radio = $tv = $mobile = $computer = $internet = $fridge = $bike = $car = $bus = $none = 0;
                                @endphp
                                @foreach ($communications as $communication)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($communication->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->radio) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->tv) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->mobile) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->computer) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->internet) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->fridge) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->bike) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->car) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->bus) }}</td>
                                        <td>{{ $numberConverter->devanagari($communication->none) }}</td>
                                        <td>
                                            <a href="{{ route('communication.edit', $communication->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $communication->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $radio += $communication->radio;
                                        $tv += $communication->tv;
                                        $mobile += $communication->mobile;
                                        $computer += $communication->computer;
                                        $internet += $communication->internet;
                                        $fridge += $communication->fridge;
                                        $bike += $communication->bike;
                                        $car += $communication->car;
                                        $bus += $communication->bus;
                                        $none += $communication->none;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($radio) }}</td>
                                    <td>{{ $numberConverter->devanagari($tv) }}</td>
                                    <td>{{ $numberConverter->devanagari($mobile) }}</td>
                                    <td>{{ $numberConverter->devanagari($computer) }}</td>
                                    <td>{{ $numberConverter->devanagari($internet) }}</td>
                                    <td>{{ $numberConverter->devanagari($fridge) }}</td>
                                    <td>{{ $numberConverter->devanagari($bike) }}</td>
                                    <td>{{ $numberConverter->devanagari($car) }}</td>
                                    <td>{{ $numberConverter->devanagari($bus) }}</td>
                                    <td>{{ $numberConverter->devanagari($none) }}</td>
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
            let table = $('#communication-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'आधुनिक सुविधाम विवरण',
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
                        url = "{{ route('communication.destroy', ':id') }}";

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
