@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">फलफुल, तरकारी र नगदे बाली सम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('fruit.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                    <th colspan="3">तरकारी बाली</th>
                                    <th colspan="3">फलफुल बाली</th>
                                    <th colspan="3">नगदे बाली</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                    <td>क्षेत्रफल (कट्ठा)</td>
                                    <td>उत्पादन (क्विन्टल)</td>
                                    <td>बिक्री (क्विन्टल)</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $veggie_area = $veggie_production = $veggie_sold = $fruit_area = $fruit_production = $fruit_sold = $cash_area = $cash_production = $cash_sold = 0;
                                @endphp
                                @foreach ($fruits as $fruit)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($fruit->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->veggie_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->veggie_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->veggie_sold) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->fruit_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->fruit_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->fruit_sold) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->cash_area) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->cash_production) }}</td>
                                        <td>{{ $numberConverter->devanagari($fruit->cash_sold) }}</td>
                                        <td>
                                            <a href="{{ route('fruit.edit', $fruit->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $fruit->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $veggie_area += $fruit->veggie_area;
                                        $veggie_production += $fruit->veggie_production;
                                        $veggie_sold += $fruit->veggie_sold;
                                        $fruit_area += $fruit->fruit_area;
                                        $fruit_production += $fruit->fruit_production;
                                        $fruit_sold += $fruit->fruit_sold;
                                        $cash_area += $fruit->cash_area;
                                        $cash_production += $fruit->cash_production;
                                        $cash_sold += $fruit->cash_sold;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($veggie_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($veggie_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($veggie_sold) }}</td>
                                    <td>{{ $numberConverter->devanagari($fruit_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($fruit_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($fruit_sold) }}</td>
                                    <td>{{ $numberConverter->devanagari($cash_area) }}</td>
                                    <td>{{ $numberConverter->devanagari($cash_production) }}</td>
                                    <td>{{ $numberConverter->devanagari($cash_sold) }}</td>
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
                        url = "{{ route('fruit.destroy', ':id') }}";

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