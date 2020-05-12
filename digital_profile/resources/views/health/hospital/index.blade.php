@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">स्वास्थ संस्थाको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('hospital.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered hover table-sm">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th rowspan="2">स्वास्थ संस्थाको नाम र ठेगाना</th>
                                    <th rowspan="2">वडा नम्बर</th>
                                    <th colspan="2">स्वास्थकर्मी</th>
                                    <th rowspan="2">शैया संख्या</th>
                                    <th colspan="13">उपलब्ध सेवा तथा सुविधा</th>
                                    <th colspan="7">कार्यरत स्वास्थकर्मीको संख्या</th>
                                    <th rowspan="2">कार्यहरु</th>
                                </tr>
                                <tr>
                                    <th>स्वीकृत दरबन्दी</th>
                                    <th>कार्यरत</th>
                                    <th>प्रसुती सेवा</th>
                                    <th>ल्याब</th>
                                    <th>क्लिनिक</th>
                                    <th>एक्सरे</th>
                                    <th>परिवार नियोजन</th>
                                    <th>खोप सेवा</th>
                                    <th>सुरक्षित मातृत्व</th>
                                    <th>पोषण सेवा</th>
                                    <th>रक्त संचार</th>
                                    <th>फार्मेसी</th>
                                    <th>आँखा उपचार सेवा</th>
                                    <th>स्वास्थ शिक्षण सेवा</th>
                                    <th>परामर्श सेवा</th>
                                    <th>विशेसज्ञ चिकित्सक</th>
                                    <th>सामान्य चिकित्सक</th>
                                    <th>हे.अ.</th>
                                    <th>नर्स</th>
                                    <th>अहेब</th>
                                    <th>अनमी</th>
                                    <th>ल्याब टेक्निसियन</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $position = $working = $bed = $specialist = $physician = $assistant = $nurse = $worker = $midwifery = $technician = 0;
                                @endphp
                                @foreach ($hospitals as $hospital)
                                    <tr>
                                        <td>{{ $hospital->name }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->position) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->working) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->bed) }}</td>
                                        <td>{{ $hospital->maternity }}</td>
                                        <td>{{ $hospital->lab }}</td>
                                        <td>{{ $hospital->clinic }}</td>
                                        <td>{{ $hospital->radiography }}</td>
                                        <td>{{ $hospital->family_planning }}</td>
                                        <td>{{ $hospital->vaccination }}</td>
                                        <td>{{ $hospital->motherhood }}</td>
                                        <td>{{ $hospital->nutrition }}</td>
                                        <td>{{ $hospital->blood }}</td>
                                        <td>{{ $hospital->pharmacy }}</td>
                                        <td>{{ $hospital->optometry }}</td>
                                        <td>{{ $hospital->health_education }}</td>
                                        <td>{{ $hospital->consultation }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->specialist) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->physician) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->assistant) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->nurse) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->worker) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->midwifery) }}</td>
                                        <td>{{ $numberConverter->devanagari($hospital->technician) }}</td>
                                        <td>
                                            <a href="{{ route('hospital.edit', $hospital->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $hospital->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $position += $hospital->position;
                                        $working += $hospital->working;
                                        $bed += $hospital->bed;
                                        $specialist += $hospital->specialist;
                                        $physician += $hospital->physician;
                                        $assistant += $hospital->assistant;
                                        $nurse += $hospital->nurse;
                                        $worker += $hospital->worker;
                                        $midwifery += $hospital->midwifery;
                                        $technician += $hospital->technician;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td></td>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($position) }}</td>
                                    <td>{{ $numberConverter->devanagari($working) }}</td>
                                    <td>{{ $numberConverter->devanagari($bed) }}</td>
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
                                    <td></td>
                                    <td></td>
                                    <td>{{ $numberConverter->devanagari($specialist) }}</td>
                                    <td>{{ $numberConverter->devanagari($physician) }}</td>
                                    <td>{{ $numberConverter->devanagari($assistant) }}</td>
                                    <td>{{ $numberConverter->devanagari($nurse) }}</td>
                                    <td>{{ $numberConverter->devanagari($worker) }}</td>
                                    <td>{{ $numberConverter->devanagari($midwifery) }}</td>
                                    <td>{{ $numberConverter->devanagari($technician) }}</td>
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
                        url = "{{ route('hospital.destroy', ':id') }}";

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
