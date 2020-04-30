@extends('municipality.index')

@section('surface-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('municipality-land-usage.update', $landUsage->id) }}" method="post" class="form-horizontal">
                @csrf
                {{ method_field('PATCH') }}
                @include('municipality.land_usage._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'landUsage' => $landUsage, 'numberConverter' => $numberConverter])
            </form>
        </div>
    </div>
@endsection