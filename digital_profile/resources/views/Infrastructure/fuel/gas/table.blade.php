@extends('infrastructure.fuel.index')

@section('fuel-content')

    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('infrastructure-fuel-gas.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle"></i> नयाँ विवरण थप्नुहोस</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-sm">
                <thead class="text-center bg-gradient-danger">
                    <tr>
                        <th>वडा नं</th>
                        <th>दाउरा</th>
                        <th>मट्टितेल</th>
                        <th>एल पी ग्याँस</th>
                        <th>गोवर ग्याँस</th>
                        <th>गुईठा</th>
                        <th>विध्युत</th>
                        <th>अन्य</th>
                        <th>जम्मा</th>
                        <th>कार्यहरू</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $wood = $petrol = $lp = $dung = $dungRoll = $electricity = $others = $total = $totalWood = $totalPetrol = $totalLp = $totalDung = $totalDungRoll = $totalElectricity = $totalOthers = 0;
                    @endphp
                    @foreach ($gases as $gas)
                        <tr>
                            <td>{{ $numberConverter->devanagari($gas->ward_no) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->wood) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->petrol) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->lp) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->dung) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->dung_roll) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->electricity) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->others) }}</td>
                            <td>{{ $numberConverter->devanagari($gas->total) }}</td>
                            <td>
                                <a href="{{ route('infrastructure-fuel-gas.edit', $gas->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $gas->id }}><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @php
                            $wood += $gas->wood;
                            $petrol += $gas->petrol;
                            $lp += $gas->lp;
                            $dung += $gas->dung;
                            $dungRoll += $gas->dung_roll;
                            $electricity += $gas->electricity;
                            $others += $gas->others;
                            $total += $gas->total;
                        @endphp
                    @endforeach
                    @php
                        $totalWood = ($wood != 0) ? round(($wood/$total)*100, 2) : 0;
                        $totalPetrol = ($petrol != 0) ? round(($petrol/$total)*100, 2) : 0;
                        $totalLp = ($lp != 0) ? round(($lp/$total)*100, 2) : 0;
                        $totalDung = ($dung != 0) ? round(($dung/$total)*100, 2) : 0;
                        $totalDungRoll = ($dungRoll != 0) ? round(($dungRoll/$total)*100, 2) : 0;
                        $totalElectricity = ($electricity != 0) ? round(($electricity/$total)*100, 2) : 0;
                        $totalOthers = ($others != 0) ? round(($others/$total)*100, 2) : 0;
                    @endphp
                </tbody>
                <tfoot class="text-center bg-gradient-secondary">
                    <tr>
                        <td>जम्मा</td>
                        <td>{{ $numberConverter->devanagari($wood) }}</td>
                        <td>{{ $numberConverter->devanagari($petrol) }}</td>
                        <td>{{ $numberConverter->devanagari($lp) }}</td>
                        <td>{{ $numberConverter->devanagari($dung) }}</td>
                        <td>{{ $numberConverter->devanagari($dungRoll) }}</td>
                        <td>{{ $numberConverter->devanagari($electricity) }}</td>
                        <td>{{ $numberConverter->devanagari($others) }}</td>
                        <td>{{ $numberConverter->devanagari($total) }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>प्रतिसत</td>
                        <td>{{ $numberConverter->devanagari($totalWood) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalPetrol) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalLp) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalDung) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalDungRoll) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalElectricity) }} %</td>
                        <td>{{ $numberConverter->devanagari($totalOthers) }} %</td>
                        <td>{{ (count($gases) == 0) ? $numberConverter->devanagari(0) : $numberConverter->devanagari(100) }} %</td>
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

@endsection