@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">पर्यटकीय स्थलहरुको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('place.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm" id="place-table">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th>#</th>
                                <th>स्थलको नाम</th>
                                <th>वडा नम्बर</th>
                                <th>सडकको पहुँच</th>
                                <th>नजिकको बजार केन्द्र सम्मको दुरी (किमी)</th>
                                <th>स्वामित्व</th>
                                <th>विशेषता</th>
                                <th>वार्षिक पर्यटक आगमन संख्या</th>
                                <th>कार्यहरु</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $i = $distance = $economy = 0;
                            @endphp
                            @foreach ($places as $place)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $place->name }}</td>
                                    <td>{{ $numberConverter->devanagari($place->ward_no) }}</td>
                                    <td>{{ $place->availability }}</td>
                                    <td>{{ $numberConverter->devanagari($place->distance) }} कि.मी.</td>
                                    <td>{{ $place->allocation }}</td>
                                    <td>{{ $place->importance }}</td>
                                    <td>{{ $numberConverter->devanagari($place->economy) }}</td>
                                    <td>
                                        <a href="{{ route('place.edit', $place->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $place->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $distance += $place->distance;
                                    $economy += $place->economy;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td></td>
                                <td>जम्मा</td>
                                <td></td>
                                <td></td>
                                <td>{{ $numberConverter->devanagari($distance) }} कि.मी.</td>
                                <td></td>
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

@endsection

@section('custom-scripts')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>

    <script>

        jQuery(function($) {

            $("#place-table").DataTable();

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('place.destroy', ':id') }}";

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