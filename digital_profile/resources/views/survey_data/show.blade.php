@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <h1 class="text-dark">सर्वेक्षणबाट लिइएको {{ $surveyData->owner_name }} को डाटा</h1>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>परिवार विवरण</h5>
                        </div>
                    </div>
                    <hr>
                    @if (count($householdDetails) == 0)
                    <div class="text-center my-4 text-danger">
                        <h6>परिवार विवरण पत्ता लगाउन असमर्थ|</h6>
                    </div>
                    @else
                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-hover table-sm">
                                <thead class="text-center bg-gradient-danger">
                                    <tr>
                                        <th>नाम</th>
                                        <th>उमेर</th>
                                        <th>स्वास्थ्य अवस्था</th>
                                        <th>अध्ययन</th>
                                        <th>लिड़ग</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($householdDetails as $detail)
                                        <tr>
                                            <td>{{ $detail->name }}</td>
                                            <td>{{ $detail->age }}</td>
                                            <td>{{ $detail->health }}</td>
                                            <td>{{ $detail->study }}</td>
                                            <td>{{ $detail->sex }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- @foreach ($householdDetails as $detail)
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item flex-fill"><b>नाम</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->name }}</li>
                                <li class="list-group-item flex-fill"><b>उमेर</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->age }}</li>
                                <li class="list-group-item flex-fill"><b>स्वास्थ्य अवस्था</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->health }}</li>
                                <li class="list-group-item flex-fill"><b>अध्ययन</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->study }}</li>
                                <li class="list-group-item flex-fill"><b>लिड़ग</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->sex }}</li>
                            </ul>
                        @endforeach --}}
                    @endif
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>घर जग्गा विवरण</h5>
                        </div>
                    </div>
                    <hr>
                    @if (count($landDetails) == 0)
                        <div class="text-center my-4 text-danger">
                            <h6>घर जग्गा विवरण पत्ता लगाउन असमर्थ|</h6>
                        </div>
                    @else
                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-hover table-sm">
                                <thead class="text-center bg-gradient-danger">
                                    <tr>
                                        <th>जग्गा प्रकार</th>
                                        <th>क्षेत्रफल</th>
                                        <th>राजमार्ग देखीकाे दुरी (कि‍.मी.)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($landDetails as $detail)
                                        <tr>
                                            <td>{{ $detail->land_type }}</td>
                                            <td>{{ $detail->area }} {{ $detail->area_type }}</td>
                                            <td>{{ $detail->distance_from_highway }} KM</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- @foreach ($landDetails as $detail)
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item flex-fill"><b>जग्गा प्रकार</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->land_type }}</li>
                                <li class="list-group-item flex-fill"><b>क्षेत्रफल</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->area }} {{ $detail->area_type }}</li>
                                <li class="list-group-item flex-fill"><b>राजमार्ग देखीकाे दुरी कि‍.मी.</b></li>
                                <li class="list-group-item flex-fill">{{ $detail->distance_from_highway }}</li>
                            </ul>
                        @endforeach --}}
                    @endif
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6 text-center">
                            <h5>दुधजन्य चाैपायाकाे सूची</h5>
                        </div>
                        <div class="col-6 text-center">
                            <h5>मासु तथा अन्य प्रयाेजनकाे लागि पालिने चाैपायकाे सूची</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            @if (count($animalDetails) == 0)
                                <div class="text-center my-4 text-danger">
                                    <h6>दुधजन्य चाैपायाकाे विवरण पत्ता लगाउन असमर्थ|</h6>
                                </div>
                            @else
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered table-hover table-sm">
                                        <thead class="text-center bg-gradient-danger">
                                            <tr>
                                                <th>#</th>
                                                <th>नाम</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i=0)
                                            @foreach ($animalDetails as $detail)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $detail->animal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            @if (count($meatDetails) == 0)
                                <div class="text-center my-4 text-danger">
                                    <h6>मासु तथा अन्य प्रयाेजनकाे लागि पालिने चाैपायकाे विवरण पत्ता लगाउन असमर्थ|</h6>
                                </div>
                            @else
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered table-hover table-sm">
                                        <thead class="text-center bg-gradient-danger">
                                            <tr>
                                                <th>#</th>
                                                <th>नाम</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i=0)
                                            @foreach ($meatDetails as $detail)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $detail->animal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            LOCATION
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="map" style="width: 100%; height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')

    {{-- <script src = "https://maps.googleapis.com/maps/api/js/?key=AIzaSyBtTcgWlbE0sKQJ49bSdWtxwkwl3hg8fJ0"></script> --}}

    {{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtTcgWlbE0sKQJ49bSdWtxwkwl3hg8fJ0&callback=initMap&libraries=&v=weekly" defer></script> --}}
    
    <script>

        function initMap() {
            var latitude = parseFloat("{{ $surveyData->latitude }}");
            var longitude = parseFloat("{{ $surveyData->longitude }}");
            // The location of Uluru
            var uluru = {lat: latitude, lng: longitude};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 16, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }

        jQuery(function($) {

            // function initMap() {
            //     // The location of Uluru
            //     var uluru = {lat: -25.344, lng: 131.036};
            //     // The map, centered at Uluru
            //     var map = new google.maps.Map(
            //         document.getElementById('map'), {zoom: 4, center: uluru});
            //     // The marker, positioned at Uluru
            //     var marker = new google.maps.Marker({position: uluru, map: map});
            // }


            // function initMap() {
            //     exports.map = new google.maps.Map(document.getElementById("map"), {
            //         center: {
            //         lat: -34.397,
            //         lng: 150.644
            //         },
            //         zoom: 8
            //     });
            // }

            // exports.initMap = initMap;


            // var mapOptions = {
            //    center:new google.maps.LatLng(19.373341, 78.662109),
            //    zoom:7
            // }
				
            // var map = new google.maps.Map(document.getElementById("map"),mapOptions);
            
            // var marker = new google.maps.Marker({
            //    position: new google.maps.LatLng(17.088291, 78.442383),
            //    map: map,
            // });

            // if (navigator.geolocation) {    
            //     navigator.geolocation.getCurrentPosition(exportPosition, errorPosition);
            // } else {    
            //     alert('Sorry your browser doesn\'t support the Geolocation API');    
            // }

            // function errorPosition() {                  
            //     alert('Sorry couldn\'t find your location');                        
            // }

            // function exportPosition(position) {
                
            //     // Get the geolocation properties and set them as variables
            //     latitude = "{{ $surveyData->latitude }}";
            //     longitude  = "{{ $surveyData->longitude }}";

            //     // Insert the google maps iframe and change the location using the variables returned from the API
            //     $('#map').html('<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/?ie=UTF8&amp;ll='+latitude+','+longitude+'&amp;spn=0.332359,0.617294&amp;t=m&amp;z=11&amp;output=embed"></iframe>');

            //     jQuery.ajax({
            //         url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true',
            //         type: 'POST',
            //         dataType: 'json',
            //         success: function(data) {
            //             //If Successful add the data to the 'location' div
            //             locationdiv.html('Location: '+data.results[0].address_components[2].long_name);
            //         },
            //         error: function(xhr, textStatus, errorThrown) {
            //             errorPosition();
            //         }
            //     });

            // }

        });

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtTcgWlbE0sKQJ49bSdWtxwkwl3hg8fJ0&callback=initMap">
    </script>


@endsection
