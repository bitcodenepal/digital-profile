@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-4 col-md-2">
            <a href="{{ route('trade.index') }}" class="btn btn-md btn-info" title="तालिका पृष्ठमा फिर्ता जानुहोस्"><i class="fas fa-arrow-circle-left fa-fw"></i> फिर्ता जानुहोस्</a>
        </div>
        <div class="col-12 col-sm-8 col-md-10">
            <h1 class="text-dark">आयात तथा निर्यातको अवस्थाको विवरण परिवर्तन गर्नुहोस्</h1>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('trade.update', $trade->id) }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PATCH')
                        @include('economy.trade._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'trade' => $trade])
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection