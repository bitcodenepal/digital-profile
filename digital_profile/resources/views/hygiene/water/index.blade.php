@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-8 col-md-8">
            <h1 class="text-dark">खानेपानीको श्रोतको आधारमा घरपरिवारको विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-4 col-md-4">
            <a href="{{ route('water.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-hover table-sm">
                            <thead class="text-center bg-gradient-danger">
                                <tr>
                                    <th>वडा नम्बर</th>
                                    <th>घरमै पाइप धारा</th>
                                    <th>सार्वजनिक धारा</th>
                                    <th>डिप बोरिङ्ग</th>
                                    <th>नल</th>
                                    <th>ढाकिएको इनार</th>
                                    <th>नढाकिएको इनार</th>
                                    <th>मूलको पानी</th>
                                    <th>नदी/खोला</th>
                                    <th>अन्य</th>
                                    <th>जम्मा</th>
                                    <th>कार्यहरु</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                    $pipe_tap = $public_tap = $deep_boring = $tap = $closed_well = $open_well = $original = $river = $others = $total = 0;
                                @endphp
                                @foreach ($waters as $water)
                                    <tr>
                                        <td>{{ $numberConverter->devanagari($water->ward_no) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->pipe_tap) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->public_tap) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->deep_boring) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->tap) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->closed_well) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->open_well) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->original) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->river) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->others) }}</td>
                                        <td>{{ $numberConverter->devanagari($water->total) }}</td>
                                        <td>
                                            <a href="{{ route('water.edit', $water->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $water->id }}><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $pipe_tap += $water->pipe_tap;
                                        $public_tap += $water->public_tap;
                                        $deep_boring += $water->deep_boring;
                                        $tap += $water->tap;
                                        $open_well += $water->open_well;
                                        $closed_well += $water->closed_well;
                                        $original += $water->original;
                                        $river += $water->river;
                                        $others += $water->others;
                                        $total += $water->total;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot class="text-center bg-gradient-secondary">
                                <tr>
                                    <td>जम्मा</td>
                                    <td>{{ $numberConverter->devanagari($pipe_tap) }}</td>
                                    <td>{{ $numberConverter->devanagari($public_tap) }}</td>
                                    <td>{{ $numberConverter->devanagari($deep_boring) }}</td>
                                    <td>{{ $numberConverter->devanagari($tap) }}</td>
                                    <td>{{ $numberConverter->devanagari($closed_well) }}</td>
                                    <td>{{ $numberConverter->devanagari($open_well) }}</td>
                                    <td>{{ $numberConverter->devanagari($original) }}</td>
                                    <td>{{ $numberConverter->devanagari($river) }}</td>
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
                        url = "{{ route('water.destroy', ':id') }}";

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