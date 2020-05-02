@extends('infrastructure.fuel.index')

@section('fuel-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('infrastructure-fuel-gas.store') }}" method="post" class="form-horizontal">
                @csrf
                @include('infrastructure.fuel.gas._form', ['buttonText' => "विवरण थप्नुहोस"])
            </form>
        </div>
    </div>
@endsection