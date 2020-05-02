<div class="row mb-3">
    <div class="col-12">
        <a href="{{ route('infrastructure-fuel-electricity.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle"></i> नयाँ विवरण थप्नुहोस</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover table-sm">
            <thead class="text-center bg-gradient-danger">
                <tr>
                    <th>वडा नं</th>
                    <th>विध्युत</th>
                    <th>मट्टितेल</th>
                    <th>बायो ग्याँस</th>
                    <th>सोलार</th>
                    <th>अन्य</th>
                    <th>जम्मा</th>
                    <th>कार्यहरू</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $totalElectricity = $petrol = $bio = $solar = $others = $total = $electricityPercent = $totalPetrol = $totalBio = $totalSolar = $totalOthers = 0;
                @endphp
                @foreach ($electricities as $electricity)
                    <tr>
                        <td>{{ $numberConverter->devanagari($electricity->ward_no) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->electricity) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->petrol) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->bio) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->solar) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->others) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity->total) }}</td>
                        <td>
                            <a href="{{ route('infrastructure-fuel-electricity.edit', $electricity->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('infrastructure-fuel-electricity.delete', $electricity->id) }}" class="btn btn-xs btn-danger delete-land-detail" title="हटाउनुहोस्"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                        $totalElectricity += $electricity->electricity;
                        $petrol += $electricity->petrol;
                        $bio += $electricity->bio;
                        $solar += $electricity->solar;
                        $others += $electricity->others;
                        $total += $electricity->total;
                    @endphp
                @endforeach
                @php
                    $electricityPercent = ($totalElectricity != 0) ? round(($totalElectricity/$total)*100, 2) : 0;
                    $totalPetrol = ($petrol != 0) ? round(($petrol/$total)*100, 2) : 0;
                    $totalBio = ($bio != 0) ? round(($bio/$total)*100, 2) : 0;
                    $totalSolar = ($solar != 0) ? round(($solar/$total)*100, 2) : 0;
                    $totalOthers = ($others != 0) ? round(($others/$total)*100, 2) : 0;
                @endphp
            </tbody>
            <tfoot class="text-center bg-gradient-secondary">
                <tr>
                    <td>जम्मा</td>
                    <td>{{ $numberConverter->devanagari($totalElectricity) }}</td>
                    <td>{{ $numberConverter->devanagari($petrol) }}</td>
                    <td>{{ $numberConverter->devanagari($bio) }}</td>
                    <td>{{ $numberConverter->devanagari($solar) }}</td>
                    <td>{{ $numberConverter->devanagari($others) }}</td>
                    <td>{{ $numberConverter->devanagari($total) }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>प्रतिसत</td>
                    <td>{{ $numberConverter->devanagari($electricityPercent) }} %</td>
                    <td>{{ $numberConverter->devanagari($totalPetrol) }} %</td>
                    <td>{{ $numberConverter->devanagari($totalBio) }} %</td>
                    <td>{{ $numberConverter->devanagari($totalSolar) }} %</td>
                    <td>{{ $numberConverter->devanagari($totalOthers) }} %</td>
                    <td>{{ (count($electricities) == 0) ? $numberConverter->devanagari(0) : $numberConverter->devanagari(100) }} %</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12 text-right">
        <span class="text-muted"><i><small>श्रोत: घरपरिवार सर्वेक्षण, २०७५, कर्जन्हा नगरपालिका</small></i></span>
    </div>
</div>