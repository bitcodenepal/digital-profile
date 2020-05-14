@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">खेलमैदान, पिकनिक तथा मनोरंजनस्थलसम्बन्धी विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('miscellaneous.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-hover table-sm">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th>वडा नम्बर</th>
                                <th>स्थलको नाम</th>
                                <th>उपयोग</th>
                                <th>क्षेत्रफल (वर्ग कि. मी.)</th>
                                <th>स्वामित्व</th>
                                <th>आम्दानी (वार्षिक रु)</th>
                                <th>सेवाग्राही/आगन्तुक संख्या (वार्षिक)</th>
                                <th>कार्यहरु</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($miscellaneous as $data)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($data->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->name) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->usage) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->area) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->allocation) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->economy) }}</td>
                                    <td>{{ $numberConverter->devanagari($data->clients) }}</td>
                                    <td>
                                        <a href="{{ route('miscellaneous.edit', $data->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $data->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')

    <script>

        jQuery(function($) {
            $(".delete-detail").click(function() {
                if (confirm("के तपाईं यो विवरण निश्चय हटाउन चाहानुहुन्छ?")) {
                    let id = this.dataset.id,
                        url = "{{ route('miscellaneous.destroy', ':id') }}";

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
        });

    </script>

@endsection