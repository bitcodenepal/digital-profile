@extends('infrastructure.fuel.index')

@section('fuel-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('infrastructure-fuel-electricity.update', $electricity->id) }}" method="post" class="form-horizontal">
                @csrf
                {{ method_field('PATCH') }}
                @include('infrastructure.fuel.electricity._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'electricity' => $electricity])
            </form>
        </div>
    </div>
@endsection