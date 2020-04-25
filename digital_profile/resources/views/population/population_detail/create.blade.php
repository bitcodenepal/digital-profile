@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-2">
            <a href="{{ route('population-detail.index') }}" class="btn btn-md btn-info" title="तालिका पृष्ठमा फिर्ता जानुहोस्"><i class="fas fa-arrow-left fa-fw"></i> फिर्ता जानुहोस्</a>
        </div>
        <div class="col-10">
            <h1 class="text-dark">जनसंख्या विवरण थप्नुहोस्</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('population-detail.store') }}" class="form-horizontal" method="POST">
                    @csrf
                    @include('population.population_detail._form', ['buttonText' => "विवरण थप्नुहोस"])
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>
@endsection
