@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">धर्म अनुसार जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('religion.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
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
                                <th>वडा नम्बर</th>
                                <th>हिन्दु</th>
                                <th>बौद्ध</th>
                                <th>ईस्लाम</th>
                                <th>इसाई</th>
                                <th>किराँत</th>
                                <th>जैन</th>
                                <th>अन्य</th>
                                <th>उल्लेख नभएको</th>
                                <th>जम्मा</th>
                                <th>कार्यहरू</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $hindu = $bouddha = $islam = $christian = $kirat = $jain = $others = $notIncluded = $total = $totalHindu = $totalBouddha = $totalIslam = $totalChristian = $totalKirat = $totalJain = $totalOthers = $totalNotIncluded = 0;
                            @endphp
                            @foreach ($religions as $religion)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($religion->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->hindu) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->bouddha) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->islam) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->christian) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->kirat) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->jain) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->others) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->not_included) }}</td>
                                    <td>{{ $numberConverter->devanagari($religion->total) }}</td>
                                    <td>
                                        <a href="{{ route('religion.edit', $religion->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $religion->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $hindu += $religion->hindu;
                                    $bouddha += $religion->bouddha;
                                    $islam += $religion->islam;
                                    $christian += $religion->christian;
                                    $kirat += $religion->kirat;
                                    $jain += $religion->jain;
                                    $others += $religion->others;
                                    $notIncluded += $religion->not_included;
                                    $total += $religion->total;
                                @endphp
                            @endforeach
                            @php
                                $totalHindu = ($hindu != 0) ? round(($hindu/$total)*100, 2) : 0;
                                $totalBouddha = ($bouddha != 0) ? round(($bouddha/$total)*100, 2) : 0;
                                $totalIslam = ($islam != 0) ? round(($islam/$total)*100, 2) : 0;
                                $totalChristian = ($christian != 0) ? round(($christian/$total)*100, 2) : 0;
                                $totalKirat = ($kirat != 0) ? round(($kirat/$total)*100, 2) : 0;
                                $totalJain = ($jain != 0) ? round(($jain/$total)*100, 2) : 0;
                                $totalOthers = ($others != 0) ? round(($others/$total)*100, 2) : 0;
                                $totalNotIncluded = ($notIncluded != 0) ? round(($notIncluded/$total)*100, 2) : 0;
                            @endphp
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($hindu) }}</td>
                                <td>{{ $numberConverter->devanagari($bouddha) }}</td>
                                <td>{{ $numberConverter->devanagari($islam) }}</td>
                                <td>{{ $numberConverter->devanagari($christian) }}</td>
                                <td>{{ $numberConverter->devanagari($kirat) }}</td>
                                <td>{{ $numberConverter->devanagari($jain) }}</td>
                                <td>{{ $numberConverter->devanagari($others) }}</td>
                                <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
                                <td>{{ $numberConverter->devanagari($total) }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>प्रतिसत</td>
                                <td>{{ $numberConverter->devanagari($totalHindu) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalBouddha) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalIslam) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalChristian) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalKirat) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalJain) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalOthers) }} %</td>
                                <td>{{ $numberConverter->devanagari($totalNotIncluded) }} %</td>
                                <td>{{ (count($religions) == 0) ? $numberConverter->devanagari(0) : $numberConverter->devanagari(100) }} %</td>
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
                        url = "{{ route('religion.destroy', ':id') }}";

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
