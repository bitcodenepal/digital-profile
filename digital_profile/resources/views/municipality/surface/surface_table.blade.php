@extends('municipality.index')

@section('surface-content')
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('municipality-surface.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle"></i> नयाँ विवरण थप्नुहोस</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-sm">
                <thead class="text-center bg-gradient-danger">
                    <tr>
                        <th>वडा नं</th>
                        <th>इकाई</th>
                        <th>अब्बल</th>
                        <th>दोयम</th>
                        <th>सिम</th>
                        <th>चहार</th>
                        <th>कार्यहरू</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($surfaces as $surface)
                        <tr>
                            <td>{{ $surface->ward_no }}</td>
                            <td>{{ $surface->unit }}</td>
                            <td>{{ $surface->first }}</td>
                            <td>{{ $surface->second }}</td>
                            <td>{{ $surface->third }}</td>
                            <td>{{ $surface->fourth }}</td>
                            <td>
                                <a href="{{ route('municipality-surface.edit', $surface->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $surface->id }}><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <span class="text-muted"><i><small>श्रोत: संस्थागत सर्वेक्षण, २०७५, कर्जन्हा नगरपालिका</small></i></span>
        </div>
    </div>
@endsection