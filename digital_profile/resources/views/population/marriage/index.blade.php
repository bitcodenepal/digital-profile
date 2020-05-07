@extends('layouts.app')

@section('content-header')
    <div class="row mt-3 mb-3">
        <div class="col-12 col-sm-7 col-md-7">
            <h1 class="text-dark">वैवाहिक स्थिति अनुसार जनसंख्या विवरण तालिका</h1>
        </div>
        <div class="col-12 col-sm-5 col-md-5">
            <a href="{{ route('marriage.create') }}" class="btn btn-md btn-info float-right" id="create-detail"><i class="fas fa-plus-circle fa-fw"></i> विवरण थप्नुहोस्</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="text-center bg-gradient-danger">
                            <tr>
                                <th>वडा नम्बर</th>
                                <th>अविवाहित</th>
                                <th>एकल विवाह</th>
                                <th>वहुविवाह</th>
                                <th>पुनः विवाह</th>
                                <th>विधवा/विदुर</th>
                                <th>सम्बन्ध विच्छेद</th>
                                <th>विवाहित तर अलग बसेको</th>
                                <th>कम उमेर</th>
                                <th>उल्लेख नभएको</th>
                                <th>जम्मा</th>
                                <th>कार्यहरू</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $unmarried = $single = $multiple = $remarried = $widowed = $divorced = $separated = $early = $notIncluded = $total = 0;
                            @endphp
                            @foreach ($marriages as $marriage)
                                <tr>
                                    <td>{{ $numberConverter->devanagari($marriage->ward_no) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->unmarried) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->single) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->multiple) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->remarried) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->widowed) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->divorced) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->separated) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->early) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->not_included) }}</td>
                                    <td>{{ $numberConverter->devanagari($marriage->total) }}</td>
                                    <td>
                                        <a href="{{ route('marriage.edit', $marriage->id) }}" class="btn btn-xs btn-primary edit-detail" title="सम्पादन गर्नुहोस्"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-xs btn-danger delete-detail" title="हटाउनुहोस्" data-id={{ $marriage->id }}><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $unmarried += $marriage->unmarried;
                                    $single += $marriage->single;
                                    $multiple += $marriage->multiple;
                                    $remarried += $marriage->remarried;
                                    $widowed += $marriage->widowed;
                                    $divorced += $marriage->divorced;
                                    $separated += $marriage->separated;
                                    $early += $marriage->early;
                                    $notIncluded += $marriage->not_included;
                                    $total += $marriage->total;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot class="text-center bg-gradient-secondary">
                            <tr>
                                <td>जम्मा</td>
                                <td>{{ $numberConverter->devanagari($unmarried) }}</td>
                                <td>{{ $numberConverter->devanagari($single) }}</td>
                                <td>{{ $numberConverter->devanagari($multiple) }}</td>
                                <td>{{ $numberConverter->devanagari($remarried) }}</td>
                                <td>{{ $numberConverter->devanagari($widowed) }}</td>
                                <td>{{ $numberConverter->devanagari($divorced) }}</td>
                                <td>{{ $numberConverter->devanagari($separated) }}</td>
                                <td>{{ $numberConverter->devanagari($early) }}</td>
                                <td>{{ $numberConverter->devanagari($notIncluded) }}</td>
                                <td>{{ $numberConverter->devanagari($total) }}</td>
                                <td></td>
                            </tr>
                        </tfoot>
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
                        url = "{{ route('marriage.destroy', ':id') }}";

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
