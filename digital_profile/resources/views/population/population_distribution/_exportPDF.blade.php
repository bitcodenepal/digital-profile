<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=3, user-scalable=yes" name="viewport">

        <title>Karjanha Municipality::Population Distribution</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <style>
            body {
                font-size: 14px;
            }
        </style>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ asset('img/nepal_logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 40px; height: 40px;">
                    <h4>Karjanha Municipality</h4>
                    <p>Karjanha is a Municipality in Siraha District in the Province 2 of south-eastern Nepal</p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-12">
                <h5>Geographical Detail Table</h5>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-sm ">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th rowspan="2">Ward Number</th>
                            <th rowspan="2">Families</th>
                            <th colspan="3">Population</th>
                            <th rowspan="2">Average Family</th>
                            <th rowspan="2">Sex Ratio</th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>Male</th>
                            <th>Female</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($populationDistributions))
                            @foreach ($populationDistributions as $populationDistribution)
                                <tr>
                                    <td>{{ $numberConverter->english($populationDistribution->ward_no) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->household_number) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->total) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->male_number) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->female_number) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->average_family) }}</td>
                                    <td>{{ $numberConverter->english($populationDistribution->gender_ratio) }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </body>
</html>
