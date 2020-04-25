<div class="modal-header">
  <h4 class="modal-title">जनसंख्या वितरण फारम</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form action="{{ route('population-distribution.store') }}" method="post" class="form-horizontal">
  @csrf
  @include('population.population_distribution._form', ['buttonText' => "विवरण थप्नुहोस"])
</form>
