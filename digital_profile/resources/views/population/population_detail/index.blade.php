@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-6">
            <h1 class="text-dark">जनसंख्या विवरणको तालिका</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('detail.create') }}" class="btn btn-md btn-info float-right"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm" id="table">
                        <thead>
                            <tr>
                                <th>ksafnk</th>
                                <th>ksafnk</th>
                                <th>ksafnk</th>
                                <th>ksafnk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>sjdbjsb</td>
                                <td>sjdbjsb</td>
                                <td>sjdbjsb</td>
                                <td>sjdbjsb</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script>
        jQuery(function($) {
            $("#table").DataTable();
        });
    </script>
@endsection