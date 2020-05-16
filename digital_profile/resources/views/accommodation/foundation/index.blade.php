@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">घरको जगको आधारमा घरपरिवारको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('foundation.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>माटो वा ढुङ्गा</th>
                                    <th>सिमेन्ट वा ढुङ्गा</th>
                                    <th>फ्रेम स्ट्रक्चर</th>
                                    <th>लोड वेयरिङ्ग</th>
                                    <th>काठको खम्बा</th>
                                    <th>अन्य</th>
                                    <th>जम्मा</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $mud = $cement = $frame = $load = $wood = $others = $total = 0;
                                @endphp
                                @foreach ($foundations as $foundation)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($foundation->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->mud) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->cement) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->frame) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->load) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->wood) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->others) }}</td>
                                        <td>{{ $numberConverter->devanagari($foundation->total) }}</td>
                                        <td>
                                            <a href="{{ route('foundation.edit', $foundation->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $foundation->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $mud += $foundation->mud;
                                        $cement += $foundation->cement;
                                        $frame += $foundation->frame;
                                        $load += $foundation->load;
                                        $wood += $foundation->wood;
                                        $others += $foundation->others;
                                        $total += $foundation->total;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($mud) }}</td>
                                    <td>{{ $numberConverter->devanagari($cement) }}</td>
                                    <td>{{ $numberConverter->devanagari($frame) }}</td>
                                    <td>{{ $numberConverter->devanagari($load) }}</td>
                                    <td>{{ $numberConverter->devanagari($wood) }}</td>
                                    <td>{{ $numberConverter->devanagari($others) }}</td>
                                    <td>{{ $numberConverter->devanagari($total) }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
                        url = "{{ route('foundation.destroy', ':id') }}";

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