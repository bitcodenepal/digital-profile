<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="name">उद्योगको नाम तथा ठेगाना</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="name" placeholder="उद्योगको नाम तथा ठेगाना"  name="name" min="0" @if(isset($industry)) value="{{ $industry->name }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="type">उद्योगको स्वामित्व</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="type" id="type" class="form-control">
            <option value="निजी" {{ (isset($industry) && $industry->type == "निजी") ? "selected" : "" }}>निजी</option>
            <option value="सरकारी" {{ (isset($industry) && $industry->type == "सरकारी") ? "selected" : "" }}>सरकारी</option>
            <option value="अर्धसरकारी" {{ (isset($industry) && $industry->type == "अर्धसरकारी") ? "selected" : "" }}>अर्धसरकारी</option>
        </select>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="name">उद्योगको प्रकार</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <select name="category" id="category" class="form-control">
            <option value="सानो" {{ (isset($industry) && $industry->category == "सानो") ? "selected" : "" }}>सानो</option>
            <option value="मझौला" {{ (isset($industry) && $industry->category == "मझौला") ? "selected" : "" }}>मझौला</option>
            <option value="मध्यम" {{ (isset($industry) && $industry->category == "मध्यम") ? "selected" : "" }}>मध्यम</option>
            <option value="ठुलो" {{ (isset($industry) && $industry->category == "ठुलो") ? "selected" : "" }}>ठुलो</option>
        </select>
    </div>
</div>
<br>

<div class="form-group row">
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="workers">जम्मा रोजगारी जना</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <input type="number" class="form-control" id="workers" placeholder="जम्मा रोजगारी जना"  name="workers" min="0" @if(isset($industry)) value="{{ $industry->workers }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="product">उत्पादन हुने वस्तु र सेवाको नाम</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <a rel="nofollow" href="http://naya.com.np"; title="Nepali Social Network" class="naya_convert">naya.com.np</a>
        <input type="text" class="form-control" id="product" placeholder="उत्पादन हुने वस्तु र सेवाको नाम"  name="product" min="0" @if(isset($industry)) value="{{ $industry->product }}" @endif required>
    </div>
    <div class="col-12 col-sm-6 col-md-2 text-right mt-2">
        <label for="economy">वार्षिक आम्दानि</label>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <input type="number" class="form-control" id="economy" placeholder="वार्षिक आम्दानि"  name="economy" min="0" @if(isset($industry)) value="{{ $industry->economy }}" @endif required>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-md btn-success"><i class="fas fa-check-circle"></i> {{ $buttonText }}</button>
    </div>
</div>


@section('custom-scripts')
    <script src="{{ asset('js/custom_js/nayaEN2NPinit.js') }}"></script>
@endsection
