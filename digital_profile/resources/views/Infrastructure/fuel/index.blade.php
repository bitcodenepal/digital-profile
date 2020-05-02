@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <h1>प्रमुख इन्धन उपयोगको विवरण</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">खाना पकाउन प्रयोग हुने</a>
                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">बत्ति बाल्न प्रयोग हुने</a>
                          </div>
                        </div>
                        <div class="col-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                @yield('fuel-content')
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')

    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>

    <script>

        jQuery(function() {
            $("#vert-tabs-home-tab").click(function(e) {
                e.preventDefault();
                location.href = "{{ route('infrastructure-fuel-gas.index') }}";
            });

            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('infrastructure-fuel-gas.destroy', ':id') }}";

                    url = url.replace(":id", id);

                    $.ajax({
                        url: url,
                        type: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(response) {
                            alert(response);
                            location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });

            $("#vert-tabs-profile-tab").click(function() {
                $.get("{{ route('infrastructure-fuel-electricity.index') }}", function() {
                    $("#vert-tabs-profile").html(`<div class="text-center m-3"><h4>Loading...</h4></div>`);
                }).done(function(response) {
                    $("#vert-tabs-profile").html(response);
                });
            });
        });

    </script>

@endsection
