@extends('layouts.app')

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
                    <table class="table table-bordered table-hover table-sm">
                        <thead class="bg-gradient-danger text-center">
                            <tr>
                                <th>वडा नं</th>
                                <th>समावेश गाविस</th>
                                <th>क्षेत्रफल (वकिमी)</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>१</td>
                                <td>बडहरामाल (१)</td>
                                <td>८.७५</td>
                                <td>११.३९</td>
                            </tr>
                            <tr>
                                <td>२</td>
                                <td>बडहरामाल (२)</td>
                                <td>१०.१८</td>
                                <td>१३.२५</td>
                            </tr>
                            <tr>
                                <td>३</td>
                                <td>बडहरामाल (३, ४)</td>
                                <td>४.९८</td>
                                <td>६.४८</td>
                            </tr>
                            <tr>
                                <td>४</td>
                                <td>बडहरामाल (५, ६)</td>
                                <td>८.८</td>
                                <td>११.४६</td>
                            </tr>
                            <tr>
                                <td>५</td>
                                <td>बडहरामाल (८, ९)</td>
                                <td>२.४४</td>
                                <td>३.१८</td>
                            </tr>
                            <tr>
                                <td>६</td>
                                <td>बडहरामाल (७) र कल्याणपुर कालबन्जर (१, २, ३)</td>
                                <td>६.१९</td>
                                <td>८.०६</td>
                            </tr>
                            <tr>
                                <td>७</td>
                                <td>गौताडी (६-९) र कल्याणपुर कालबन्जर (४-९)</td>
                                <td>८.५३</td>
                                <td>११.१०</td>
                            </tr>
                            <tr>
                                <td>८</td>
                                <td>गौताडी (१-५)</td>
                                <td>३.५२</td>
                                <td>४.५८</td>
                            </tr>
                            <tr>
                                <td>९</td>
                                <td>कर्जन्हा (१, २, ३)</td>
                                <td>०.६६</td>
                                <td>०.८६</td>
                            </tr>
                            <tr>
                                <td>१०</td>
                                <td>कर्जन्हा (७, ८, ९)</td>
                                <td>११.५७</td>
                                <td>१५.०६</td>
                            </tr>
                            <tr>
                                <td>११</td>
                                <td>कर्जन्हा (४, ५, ६)</td>
                                <td>११.२१</td>
                                <td>१४.५९</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-gradient-secondary text-center">
                            <tr>
                                <td>जम्मा</td>
                                <td></td>
                                <td>७६.८३</td>
                                <td>१००</td>
                            </tr>
                        </tfoot>
                    </table>
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
