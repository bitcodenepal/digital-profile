@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-9 col-md-9">
            <h1 class="text-dark">प्राविधिक तथा बिशेष दक्षता भएका मानव संसाधनको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-3 col-md-3">
            <a href="{{ route('special-education.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th rowspan="2">वडा नम्बर</th>
                                <th colspan="2">कृषि र पशु</th>
                                <th colspan="2">इन्जिन्यरिंग</th>
                                <th colspan="2">वन</th>
                                <th colspan="2">मेडिसिन</th>
                                <th colspan="2">वकिल</th>
                                <th colspan="2">पत्रकार</th>
                                <th rowspan="2">जम्मा</th>
                                <th rowspan="2">कार्यहरू</th>
                            </tr>
                            <tr>
                                <th>म</th>
                                <th>पु</th>
                                <th>म</th>
                                <th>पु</th>
                                <th>म</th>
                                <th>पु</th>
                                <th>म</th>
                                <th>पु</th>
                                <th>म</th>
                                <th>पु</th>
                                <th>म</th>
                                <th>पु</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $agricultureMale = $agricultureFemale = $engineeringMale = $engineeringFemale = $forestryMale = $forestryFemale = $medicineMale = $medicineFemale = $lawMale = $lawFemale = $journalismMale = $journalismFemale = $total = 0;
                            @endphp
                            @foreach ($specialEducations as $specialEducation)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($specialEducation->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->agriculture_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->agriculture_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->engineering_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->engineering_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->forestry_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->forestry_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->medicine_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->medicine_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->law_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->law_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->journalism_female) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->journalism_male) }}</td>
                                    <td>{{ $numberConverter->devanagari($specialEducation->total) }}</td>
                                    <td>
                                        <a href="{{ route('special-education.edit', $specialEducation->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $specialEducation->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $agricultureMale += $specialEducation->agriculture_male;
                                    $agricultureFemale += $specialEducation->agriculture_female;
                                    $engineeringMale += $specialEducation->engineering_male;
                                    $engineeringFemale += $specialEducation->engineering_female;
                                    $forestryMale += $specialEducation->forestry_male;
                                    $forestryFemale += $specialEducation->forestry_female;
                                    $medicineMale += $specialEducation->medicine_male;
                                    $medicineFemale += $specialEducation->medicine_female;
                                    $lawMale += $specialEducation->law_male;
                                    $lawFemale += $specialEducation->law_female;
                                    $journalismMale += $specialEducation->journalism_male;
                                    $journalismFemale += $specialEducation->journalism_female;
                                    $total += $specialEducation->total;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($agricultureFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($agricultureMale) }}</td>
                                <td>{{ $numberConverter->devanagari($engineeringFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($engineeringMale) }}</td>
                                <td>{{ $numberConverter->devanagari($forestryFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($forestryMale) }}</td>
                                <td>{{ $numberConverter->devanagari($medicineFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($medicineMale) }}</td>
                                <td>{{ $numberConverter->devanagari($lawFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($lawMale) }}</td>
                                <td>{{ $numberConverter->devanagari($journalismFemale) }}</td>
                                <td>{{ $numberConverter->devanagari($journalismMale) }}</td>
                                <td>{{ $numberConverter->devanagari($total) }}</td>
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
    
    <script>

        jQuery(function($) {
            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('special-education.destroy', ':id') }}";

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
