<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Karjanha Municipality::Surface Detail</title>

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
        <h5>Surface Detail Table</h5>
    </div>
</div>

<br>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-sm">
            <thead class="bg-danger text-white">
            <tr>
                <th>Ward No</th>
                <th>Unit</th>
                <th>Primary</th>
                <th>Secondary</th>
                <th>Tertiary</th>
                <th>Quad</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($surfaces as $surface)
                    <tr>
                        <td>{{ $numberConverter->english($surface->ward_no) }}</td>
                        <td>Bighaa</td>
                        <td>{{ $numberConverter->english($surface->first) }}</td>
                        <td>{{ $numberConverter->english($surface->second) }}</td>
                        <td>{{ $numberConverter->english($surface->third) }}</td>
                        <td>{{ $numberConverter->english($surface->fourth) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
