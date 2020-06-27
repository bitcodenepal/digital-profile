@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-4 col-md-2 mb-3">
            <a href="{{ route('crop.index') }}" class="btn btn-md btn-info" title="तालिका पृष्ठमा फिर्ता जानुहोस्"><i class="fas fa-arrow-circle-left fa-fw"></i> फिर्ता जानुहोस्</a>
        </div>
        <div class="col-12 col-sm-8 col-md-10">
            <h1 class="text-dark">अन्न, दलहन र तेल्हल बाली उत्पादन र बिक्री सम्बन्धी विवरण परिवर्तन गर्नुहोस्</h1>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('crop.update', $crop->id) }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PATCH')
                        @include('agriculture.crop._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'crop' => $crop])
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection