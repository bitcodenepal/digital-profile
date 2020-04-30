@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-2">
            <a href="{{ route('infrastructure-bridge.index') }}" class="btn btn-md btn-info" title="तालिका पृष्ठमा फिर्ता जानुहोस्"><i class="fas fa-arrow-circle-left fa-fw"></i> फिर्ता जानुहोस्</a>
        </div>
        <div class="col-10">
            <h1 class="text-dark">पुल तथा पुलेसाको विवरण परिवर्तन गर्नुहोस्</h1>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('infrastructure-bridge.update', $bridge->id) }}" method="post" class="form-horizontal">
                        @csrf
                        {{ method_field('PATCH') }}
                        @include('infrastructure.bridge._form', ['bridge' => $bridge, 'buttonText' => "परिवर्तन गर्नुहोस्"])
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection