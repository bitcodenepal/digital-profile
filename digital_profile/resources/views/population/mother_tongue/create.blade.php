@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-2">
            <a href="{{ route('mother-tongue.index') }}" class="btn btn-md btn-info" title="तालिका पृष्ठमा फिर्ता जानुहोस्"><i class="fas fa-arrow-circle-left fa-fw"></i> फिर्ता जानुहोस्</a>
        </div>
        <div class="col-10">
            <h1 class="text-dark">मातृभाषाको आधारमा जनसंख्या विवरण थप्नुहोस्</h1>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('mother-tongue.store') }}" class="form-horizontal" method="POST">
                        @csrf
                        @include('population.mother_tongue._form', ['buttonText' => "विवरण थप्नुहोस्"])
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection