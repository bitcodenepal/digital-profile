@extends('infrastructure.fuel.index')

@section('fuel-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('infrastructure-fuel-gas.update', $gas->id) }}" method="post" class="form-horizontal">
                @csrf
                {{ method_field('PATCH') }}
                @include('infrastructure.fuel.gas._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'gas' => $gas])
            </form>
        </div>
    </div>
@endsection