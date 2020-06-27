@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/custom_css/dataTables.bootstrap.css') }}">
@endsection

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <h1>भौगोलिक अवस्थितिको तालिका</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
{{--                             <a href="{{ route('export.municipality-geography') }}" class="btn btn-xs btn-warning" target="_blank">--}}
{{--                                 <i class="fas fa-file-pdf fa-fw"></i> PDF को रूपमा डाउनलोड गर्नुहोस्--}}
{{--                             </a>--}}
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 text-right mb-3" id="export-buttons">

                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-hover table-sm" id="geography-table">
                            <thead class="bg-gradient-danger text-center">
                                <tr>
                                    <th>#</th>
                                    <th>वडा नं</th>
                                    <th>समावेश गाविस</th>
                                    <th>क्षेत्रफल (वकिमी)</th>
                                    <th>प्रतिशत</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>१</td>
                                    <td>बडहरामाल (१)</td>
                                    <td>८.७५</td>
                                    <td>११.३९</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>२</td>
                                    <td>बडहरामाल (२)</td>
                                    <td>१०.१८</td>
                                    <td>१३.२५</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>३</td>
                                    <td>बडहरामाल (३, ४)</td>
                                    <td>४.९८</td>
                                    <td>६.४८</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>४</td>
                                    <td>बडहरामाल (५, ६)</td>
                                    <td>८.८</td>
                                    <td>११.४६</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>५</td>
                                    <td>बडहरामाल (८, ९)</td>
                                    <td>२.४४</td>
                                    <td>३.१८</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>६</td>
                                    <td>बडहरामाल (७) र कल्याणपुर कालबन्जर (१, २, ३)</td>
                                    <td>६.१९</td>
                                    <td>८.०६</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>७</td>
                                    <td>गौताडी (६-९) र कल्याणपुर कालबन्जर (४-९)</td>
                                    <td>८.५३</td>
                                    <td>११.१०</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>८</td>
                                    <td>गौताडी (१-५)</td>
                                    <td>३.५२</td>
                                    <td>४.५८</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>९</td>
                                    <td>कर्जन्हा (१, २, ३)</td>
                                    <td>०.६६</td>
                                    <td>०.८६</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>१०</td>
                                    <td>कर्जन्हा (७, ८, ९)</td>
                                    <td>११.५७</td>
                                    <td>१५.०६</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>११</td>
                                    <td>कर्जन्हा (४, ५, ६)</td>
                                    <td>११.२१</td>
                                    <td>१४.५९</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gradient-secondary text-center">
                                <tr>
                                    <td></td>
                                    <td>जम्मा</td>
                                    <td></td>
                                    <td>७६.८३</td>
                                    <td>१००</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <span class="text-muted"><i><small>** श्रोत: संघिय मामिला तथा सामान्य प्रशासन मन्त्रालय</small></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-scripts')

    <script src="{{ asset('js/custom_js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/custom_js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatableButtons/buttons.html5.min.js') }}"></script>

    <script>
        jQuery(function($) {

            let table = $('#geography-table').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'भौगोलिक अवस्थिति',
                        className: "btn btn-xs btn-success",
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        footer: true,
                        text: '<i class="fa fa-fw fa-file-excel"></i> एक्सेलको रूपमा डाउनलोड गर्नुहोस्'
                    },
                ],
            }).container().appendTo($('#export-buttons'));

        });
    </script>
@endsection
