@extends('municipality.index')

@section('surface-content')
    
    <div class="row m-3">
        <div class="col-12">
            <div class="text-center">
                <h3>डाटा भेटिएन</h3>
                <a href="{{ route('municipality-surface.index') }}" class="btn btn-link"><i class="fas fa-arrow-circle-left fs-fw"></i> तालिका पृष्ठमा जानुहोस्</a>
            </div>
        </div>
    </div>

@endsection