<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=3, user-scalable=yes" name="viewport">

    <title>जनसंख्या वितरण</title>
    
    {{-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans" rel="stylesheet">  --}}
    <style>
      *{
        margin: 5px;
        font-family: 'Noto Sans', sans-serif;
      }
      .text-center{
        font-weight: 600;
        color: #1a2b4c !important;
      }
      
      table td,
      table th {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        font-size: 12px;
        text-align: left;
        width: max-content;
      }

      th {
        background: #1a2b4c!important;
        color: #fff!important; 
      }
    </style>
  </head>

  <body>
     
    <h2 class="text-center">जनसंख्या वितरणको तालिका</h2>
    
    <section class="content">
        <table id="order" class="table table-bordered table-striped">
          <thead style="vertical-align: middle;">
            <tr>
                <th>S.No.</th>
                <th rowspan="2">वडा नं</th>
                <th rowspan="2">घरपरिवार</th>
                <th colspan="3">जनसंख्या</th>
                <th rowspan="2">औषत परिवार</th>
                <th rowspan="2">लैंगिक अनुपात</th>
            </tr>
            <tr>
                <th>जम्मा</th>
                <th>पुरुष</th>
                <th>महिला</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($populationDistributions))
                @php($i=1)
                @foreach ($populationDistributions as $populationDistribution)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $populationDistribution->ward_no }}</td>
                        <td>{{ $populationDistribution->household_number }}</td>
                        <td>{{ $populationDistribution->total }}</td>
                        <td>{{ $populationDistribution->male_number }}</td>
                        <td>{{ $populationDistribution->female_number }}</td>
                        <td>{{ $populationDistribution->average_family }}</td>
                        <td>{{ $populationDistribution->gender_ratio }}</td>
                    </tr>
                    @php($i++)
                @endforeach
            @endif
          </tbody>
        </table>
    </section>
    
  </body>
</html>