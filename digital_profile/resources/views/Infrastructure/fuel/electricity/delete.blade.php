@extends('infrastructure.fuel.index')

@section('fuel-content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('infrastructure-fuel-electricity.destroy', $id) }}" method="post" class="form-horizontal">
                @csrf
                {{ method_field('DELETE') }}
                <div class="text-center m-3">
                    <h4>के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?</h4>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-md btn-success float-right">हो</button>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('infrastructure-fuel-gas.index') }}" class="btn btn-md btn-danger">होइन</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
