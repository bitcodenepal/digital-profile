@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">प्रमुख पेशा अनुसार जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('occupation.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                <th>वडा नम्बर</th>
                                <th>कृषि तथा पशुपालन</th>
                                <th>नोकरी</th>
                                <th>उद्योग/व्यापार</th>
                                <th>ज्याला/मजदुरी</th>
                                <th>व्यवासायिक कार्य</th>
                                <th>वैदेशिक रोजगार</th>
                                <th>विद्यार्थी (अध्ययनरत)</th>
                                <th>गृहणी</th>
                                <th>बेरोजगार</th>
                                <th>कम उमेर</th>
                                <th>अन्य</th>
                                <th>उल्लेख नभएको</th>
                                <th>कार्यहरू</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $agriculture = $job = $business = $labor = $agency = $foreign = $student = $housewives = $unemployed = $early = $others =  $notIncluded = $totalAgriculture = $totalJob = $totalBusiness = $totalLabor = $totalAgency = $totalForeign = $totalStudent = $totalHousewives = $totalUnemployed = $totalEarly = $totalOthers = $totalNotIncluded = 0;
                            @endphp
                            @foreach ($occupations as $occupation)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($occupation->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->agriculture) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->job) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->business) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->labor) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->agency) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->foreign) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->student) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->housewives) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->unemployed) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->early) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->others) }}</td>
                                    <td>{{ $numberConverter->devanagari($occupation->not_included) }}</td>
                                    <td>
                                        <a href="{{ route('occupation.edit', $occupation->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $occupation->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $agriculture += $occupation->agriculture;
                                    $job += $occupation->job;
                                    $business += $occupation->business;
                                    $labor += $occupation->labor;
                                    $agency += $occupation->agency;
                                    $foreign += $occupation->foreign;
                                    $student += $occupation->student;
                                    $housewives += $occupation->housewives;
                                    $unemployed += $occupation->unemployed;
                                    $early += $occupation->early;
                                    $others += $occupation->others;
                                    $notIncluded += $occupation->not_included;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($agriculture) }}</td>
                                <td>{{ $numberConverter->devanagari($job) }}</td>
                                <td>{{ $numberConverter->devanagari($business) }}</td>
                                <td>{{ $numberConverter->devanagari($labor) }}</td>
                                <td>{{ $numberConverter->devanagari($agency) }}</td>
                                <td>{{ $numberConverter->devanagari($foreign) }}</td>
                                <td>{{ $numberConverter->devanagari($student) }}</td>
                                <td>{{ $numberConverter->devanagari($housewives) }}</td>
                                <td>{{ $numberConverter->devanagari($unemployed) }}</td>
                                <td>{{ $numberConverter->devanagari($early) }}</td>
                                <td>{{ $numberConverter->devanagari($others) }}</td>
                                <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
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
                        url = "{{ route('occupation.destroy', ':id') }}";

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
