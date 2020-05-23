@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">पशुपालन तथा दुधजन्य उत्पादनको अवस्था सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('dairy.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                    <th colspan="2">गाई/गोरु</th>
                                    <th colspan="2">भैंसी/राँगा</th>
                                    <th colspan="2">जम्मा</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <td>संख्या</td>
                                    <td>दुध/घ्यु उत्पादन (लिटर)</td>
                                    <td>संख्या</td>
                                    <td>दुध/घ्यु उत्पादन (लिटर)</td>
                                    <td>पशु संख्या</td>
                                    <td>दुध/घ्यु उत्पादन (लिटर)</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $cow = $cow_milk = $buffalo = $buffalo_milk = $total_cattle = $total_milk = 0;
                                @endphp
                                @foreach ($dairies as $dairy)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($dairy->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->cow) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->cow_milk) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->buffalo) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->buffalo_milk) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->total_cattle) }}</td>
                                        <td>{{ $numberConverter->devanagari($dairy->total_milk) }}</td>
                                        <td>
                                            <a href="{{ route('dairy.edit', $dairy->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $dairy->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $cow += $dairy->cow;
                                        $cow_milk += $dairy->cow_milk;
                                        $buffalo += $dairy->buffalo;
                                        $buffalo_milk += $dairy->buffalo_milk;
                                        $total_cattle += $dairy->total_cattle;
                                        $total_milk += $dairy->total_milk;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($cow) }}</td>
                                    <td>{{ $numberConverter->devanagari($cow_milk) }}</td>
                                    <td>{{ $numberConverter->devanagari($buffalo) }}</td>
                                    <td>{{ $numberConverter->devanagari($buffalo_milk) }}</td>
                                    <td>{{ $numberConverter->devanagari($total_cattle) }}</td>
                                    <td>{{ $numberConverter->devanagari($total_milk) }}</td>
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
                        url = "{{ route('dairy.destroy', ':id') }}";

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