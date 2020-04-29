@php
    use \App\Services\NumberConverter;
    $numberConverter = new NumberConverter;
@endphp

@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-7">
            <h1 class="text-dark">उमेर तथा लिङ्गको आधारमा जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-5">
            <a href="{{ route('population-age.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th colspan="19">उमेर समूह अनुसार जनसंख्या</th>
                            </tr>
                            <tr>
                                <th rowspan="3">#</th>
                                <th rowspan="3">वडा नं</th>
                                <th colspan="2">५ वर्ष मुनी</th>
                                <th colspan="2">६-१४ वर्ष</th>
                                <th colspan="2">१५-१८ वर्ष</th>
                                <th colspan="2">१९-२४ वर्ष</th>
                                <th colspan="2">२५-४९ वर्ष</th>
                                <th colspan="2">५०-५९ वर्ष</th>
                                <th colspan="2">६०-६९ वर्ष</th>
                                <th colspan="2">७० वर्ष माथि</th>
                                <th rowspan="3">कार्यहरू</th>
                            </tr>
                            <tr>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                                <td>पुरुष</td>
                                <td>महिला</td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $maleFive = $femaleFive = $maleSix = $femaleSix = $maleFifteen = $femaleFifteen = $maleNineteen = $femaleNineteen = $maleTwentyFive = $femaleTwentyFive = $maleFifty = $femaleFifty = $maleSixty = $femaleSixty = $maleSeventy = $femaleSeventy = 0;
                                $i = 1;
                            @endphp
                            @foreach ($populationAges as $populationAge)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $populationAge->ward_no }}</td>
                                    <td>{{ $populationAge->male_five }}</td>
                                    <td>{{ $populationAge->female_five }}</td>
                                    <td>{{ $populationAge->male_six }}</td>
                                    <td>{{ $populationAge->female_six }}</td>
                                    <td>{{ $populationAge->male_fifteen }}</td>
                                    <td>{{ $populationAge->female_fifteen }}</td>
                                    <td>{{ $populationAge->male_nineteen }}</td>
                                    <td>{{ $populationAge->female_nineteen }}</td>
                                    <td>{{ $populationAge->male_twenty_five }}</td>
                                    <td>{{ $populationAge->female_twenty_five }}</td>
                                    <td>{{ $populationAge->male_fifty }}</td>
                                    <td>{{ $populationAge->female_fifty }}</td>
                                    <td>{{ $populationAge->male_sixty }}</td>
                                    <td>{{ $populationAge->female_sixty }}</td>
                                    <td>{{ $populationAge->male_seventy }}</td>
                                    <td>{{ $populationAge->female_seventy }}</td>
                                    <td>
                                        <a href="{{ route('population-age.edit', $populationAge->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $populationAge->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $maleFive += $numberConverter->english($populationAge->male_five);
                                    $femaleFive += $numberConverter->english($populationAge->female_five);
                                    $maleSix += $numberConverter->english($populationAge->male_six);
                                    $femaleSix += $numberConverter->english($populationAge->female_six);
                                    $maleFifteen += $numberConverter->english($populationAge->male_fifteen);
                                    $femaleFifteen += $numberConverter->english($populationAge->female_fifteen);
                                    $maleNineteen += $numberConverter->english($populationAge->male_nineteen);
                                    $femaleNineteen += $numberConverter->english($populationAge->female_nineteen);
                                    $maleTwentyFive += $numberConverter->english($populationAge->male_twenty_five);
                                    $femaleTwentyFive += $numberConverter->english($populationAge->female_twenty_five);
                                    $maleFifty += $numberConverter->english($populationAge->male_fifty);
                                    $femaleFifty += $numberConverter->english($populationAge->female_fifty);
                                    $maleSixty += $numberConverter->english($populationAge->male_sixty);
                                    $femaleSixty += $numberConverter->english($populationAge->female_sixty);
                                    $maleSeventy += $numberConverter->english($populationAge->male_seventy);
                                    $femaleSeventy += $numberConverter->english($populationAge->female_seventy);
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="bg-gradient-secondary text-center">
                            <tr>
                                <td></td>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($maleFive) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleFive) }}</td>
                                <td>{{ $numberConverter->devanagari($maleSix) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleSix) }}</td>
                                <td>{{ $numberConverter->devanagari($maleFifteen) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleFifteen) }}</td>
                                <td>{{ $numberConverter->devanagari($maleNineteen) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleNineteen) }}</td>
                                <td>{{ $numberConverter->devanagari($maleTwentyFive) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleTwentyFive) }}</td>
                                <td>{{ $numberConverter->devanagari($maleFifty) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleFifty) }}</td>
                                <td>{{ $numberConverter->devanagari($maleSixty) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleSixty) }}</td>
                                <td>{{ $numberConverter->devanagari($maleSeventy) }}</td>
                                <td>{{ $numberConverter->devanagari($femaleSeventy) }}</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><small><i>** श्रोत: घरपरिवार सर्वेक्षण २०७५</i></small></span>
                        </div>
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
                        url = "{{ route('population-age.destroy', ':id') }}";

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