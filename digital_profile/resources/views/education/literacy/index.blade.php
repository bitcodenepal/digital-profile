@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">हालको साक्षरता अवस्थाको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('literacy.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                <th rowspan="2">वडा नम्बर</th>
                                <th colspan="3">साक्षरताको स्थिति</th>
                                <th colspan="3">निरक्षरताको स्थिति</th>
                                <th colspan="3">६ वर्ष भन्दा कम उमेरको समूह</th>
                                <th rowspan="2">उल्लेख नभएको</th>
                                <th rowspan="2">कार्यहरु</th>
                            </tr>
                            <tr>
                                <th>पुरुष</th>
                                <th>महिला</th>
                                <th>जम्मा</th>
                                <th>पुरुष</th>
                                <th>महिला</th>
                                <th>जम्मा</th>
                                <th>पुरुष</th>
                                <th>महिला</th>
                                <th>जम्मा</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $literateMale = $literateFemale = $totalLiterate = $illiterateMale = $illiterateFemale = $totalIlliterate = $minorMale = $minorFemale = $totalMinor = $notIncluded = $i = 0;
                            @endphp
                            @foreach ($literacies as $literacy)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($literacy->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($literacy->literate_male) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->literate_female) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->total_literate) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->illiterate_male) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->illiterate_female) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->total_illiterate) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->minor_male) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->minor_female) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->total_minor) }} %</td>
                                    <td>{{ $numberConverter->devanagari($literacy->not_included) }} %</td>
                                    <td>
                                        <a href="{{ route('literacy.edit', $literacy->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $literacy->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $literateMale += $literacy->literate_male;
                                    $literateFemale += $literacy->literate_female;
                                    $totalLiterate += $literacy->total_literate;
                                    $illiterateMale += $literacy->illiterate_male;
                                    $illiterateFemale += $literacy->illiterate_female;
                                    $totalIlliterate += $literacy->total_illiterate;
                                    $minorMale += $literacy->minor_male;
                                    $minorFemale += $literacy->minor_female;
                                    $totalMinor += $literacy->total_minor;
                                    $notIncluded += $literacy->not_included;
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td>जम्मा</td>
                                @if (count($literacies) > 0)
                                    <td>{{ $numberConverter->devanagari(round($literateMale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($literateFemale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($totalLiterate/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($illiterateMale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($illiterateFemale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($totalIlliterate/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($minorMale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($minorFemale/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($totalMinor/$i, 2)) }} %</td>
                                    <td>{{ $numberConverter->devanagari(round($notIncluded/$i, 2)) }} %</td>
                                    <td></td>
                                @else
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                @endif
                            </tr>
                        </tfoot>
                    </table>
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
                    url = "{{ route('literacy.destroy', ':id') }}";

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