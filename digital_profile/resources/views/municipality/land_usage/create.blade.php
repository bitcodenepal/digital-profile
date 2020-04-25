@extends('municipality.index')

@section('surface-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('municipality-land-usage.store') }}" method="post" class="form-horizontal">
                @csrf
                @include('municipality.land_usage._form', ['buttonText' => "विवरण थप्नुहोस"])
            </form>
        </div>
    </div>
@endsection
