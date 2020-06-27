@extends('municipality.index')

@section('surface-content')
    <div class="row mb-3">
        <div class="col-12 col-sm-4 col-md-4" id="export-buttons">

        </div>
        <div class="col-12 col-sm-4 col-md-4">
{{--            <a href="{{ route('export.municipality-surface') }}" class="btn btn-xs btn-warning" target="_blank">--}}
{{--                <i class="fas fa-file-pdf fa-fw"></i> PDF को रूपमा डाउनलोड गर्नुहोस्--}}
{{--            </a>--}}
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('municipality-surface.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle"></i> नयाँ विवरण थप्नुहोस</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive-sm">
                <table class="table table-bordered table-hover table-sm" id="surface-table">
                    <thead class="text-center bg-gradient-danger">
                        <tr>
                            <th>#</th>
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
                        @php($i=1)
                        @foreach ($surfaces as $surface)
                            <tr>
                                <td>{{ $i++ }}</td>
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
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <span class="text-muted"><i><small>श्रोत: संस्थागत सर्वेक्षण, २०७५, कर्जन्हा नगरपालिका</small></i></span>
        </div>
    </div>
@endsection
