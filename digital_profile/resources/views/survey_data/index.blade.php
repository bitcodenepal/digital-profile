@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
<div class="row mt-3 mb-3">
    <div class="col-12">
        <h1 class="text-dark">सर्वेक्षणबाट लिइएको डाटा</h1>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        @yield('table')
    </div>
</div>
@endsection

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>

    @yield('survey-script')
@endsection

{{-- @yield('survey-script') --}}