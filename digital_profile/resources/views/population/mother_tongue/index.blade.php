@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">मातृभाषाको आधारमा जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('mother-tongue.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                <th colspan="15">मातृभाषाको आधारमा जनसंख्या</th>
                            </tr>
                            <tr>
                                <td>#</td>
                                <th>वडा नं</th>
                                <th>नेपाली</th>
                                <th>मैथिली</th>
                                <th>भोजपुरी</th>
                                <th>थारू</th>
                                <th>हिन्दी</th>
                                <th>उर्दू</th>
                                <th>बान्तवा</th>
                                <th>तामाङ्ग</th>
                                <th>झागड</th>
                                <th>अन्य</th>
                                <th>उल्लेख नभएको</th>
                                <th>जम्मा</th>
                                <th>कार्यहरू</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $nepali = $maithili = $bhojpuri = $tharu = $hindi = $urdu = $bantawa = $tamang = $jhagad = $others = $notIncluded = $totalPopulation = 0;
                                $i = 1;
                            @endphp
                            @foreach ($motherTongues as $motherTongue)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $motherTongue->ward_no }}</td>
                                    <td>{{ $motherTongue->nepali }}</td>
                                    <td>{{ $motherTongue->maithili }}</td>
                                    <td>{{ $motherTongue->bhojpuri }}</td>
                                    <td>{{ $motherTongue->tharu }}</td>
                                    <td>{{ $motherTongue->hindi }}</td>
                                    <td>{{ $motherTongue->urdu }}</td>
                                    <td>{{ $motherTongue->bantawa }}</td>
                                    <td>{{ $motherTongue->tamang }}</td>
                                    <td>{{ $motherTongue->jhagad }}</td>
                                    <td>{{ $motherTongue->others }}</td>
                                    <td>{{ $motherTongue->not_included }}</td>
                                    <td>{{ $motherTongue->total }}</td>
                                    <td>
                                        <a href="{{ route('mother-tongue.edit', $motherTongue->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $motherTongue->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $nepali += $numberConverter->english($motherTongue->nepali);
                                    $maithili += $numberConverter->english($motherTongue->maithili);
                                    $bhojpuri += $numberConverter->english($motherTongue->bhojpuri);
                                    $tharu += $numberConverter->english($motherTongue->tharu);
                                    $hindi += $numberConverter->english($motherTongue->hindi);
                                    $urdu += $numberConverter->english($motherTongue->urdu);
                                    $bantawa += $numberConverter->english($motherTongue->bantawa);
                                    $tamang += $numberConverter->english($motherTongue->tamang);
                                    $jhagad += $numberConverter->english($motherTongue->jhagad);
                                    $others += $numberConverter->english($motherTongue->others);
                                    $notIncluded += $numberConverter->english($motherTongue->not_included);
                                    $totalPopulation += $numberConverter->english($motherTongue->total);
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td></td>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($nepali) }}</td>
                                <td>{{ $numberConverter->devanagari($maithili) }}</td>
                                <td>{{ $numberConverter->devanagari($bhojpuri) }}</td>
                                <td>{{ $numberConverter->devanagari($tharu) }}</td>
                                <td>{{ $numberConverter->devanagari($hindi) }}</td>
                                <td>{{ $numberConverter->devanagari($urdu) }}</td>
                                <td>{{ $numberConverter->devanagari($bantawa) }}</td>
                                <td>{{ $numberConverter->devanagari($tamang) }}</td>
                                <td>{{ $numberConverter->devanagari($jhagad) }}</td>
                                <td>{{ $numberConverter->devanagari($others) }}</td>
                                <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
                                <td>{{ $numberConverter->devanagari($totalPopulation) }}</td>
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
                        url = "{{ route('mother-tongue.destroy', ':id') }}";

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
