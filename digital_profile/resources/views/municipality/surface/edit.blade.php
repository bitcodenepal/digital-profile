@extends('municipality.index')

@section('surface-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('municipality-surface.update', $surface->id) }}" method="post" class="form-horizontal">
                @csrf
                {{ method_field('PATCH') }}
                @include('municipality.surface._form', ['buttonText' => "परिवर्तन गर्नुहोस्", 'surface' => $surface])
            </form>
        </div>
    </div>
@endsection
