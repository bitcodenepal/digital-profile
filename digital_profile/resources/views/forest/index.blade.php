@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">वन क्षेत्रको अवस्था सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('forest.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">वडा नम्बर</th>
                                    <th rowspan="2">वनको नाम</th>
                                    <th rowspan="2">क्षेत्रफल (हे.)</th>
                                    <th rowspan="2">वनको किसिम</th>
                                    <th rowspan="2">समेटेको घरधुरी</th>
                                    <th colspan="2">वन पैदावरको वार्षिक उत्पादन</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <th>काठ (क्यू. फि.)</th>
                                    <th>दाउरा (भारी)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $area = $houses = $wood = $firewood = 0;
                                @endphp
                                @foreach ($forests as $forest)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($forest->ward_no) }}</td>
                                        <td>{{ $forest->name }}</td>
                                        <td>{{ $numberConverter->devanagari($forest->area) }}</td>
                                        <td>{{ $forest->type }}</td>
                                        <td>{{ $numberConverter->devanagari($forest->houses) }}</td>
                                        <td>{{ $numberConverter->devanagari($forest->wood) }}</td>
                                        <td>{{ $numberConverter->devanagari($forest->firewood) }}</td>
                                        <td>
                                            <a href="{{ route('forest.edit', $forest->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $forest->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $area += $forest->area;
                                        $houses += $forest->houses;
                                        $wood += $forest->wood;
                                        $firewood += $forest->firewood;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($area) }}</td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($houses) }}</td>
                                    <td>{{ $numberConverter->devanagari($wood) }}</td>
                                    <td>{{ $numberConverter->devanagari($firewood) }}</td>
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

    <script>

        jQuery(function($) {
            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('forest.destroy', ':id') }}";

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