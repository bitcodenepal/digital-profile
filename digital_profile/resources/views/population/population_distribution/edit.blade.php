<div class="modal-header">
  <h4 class="modal-title">वडा नं {{ $populationDistribution->ward_no}} को विवरण</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form action="{{ route('distribution.update', $populationDistribution->id) }}" method="post" class="form-horizontal">
  @csrf
  {{ method_field('PATCH') }}
  @include('population.population_distribution._form', ['populationDistribution' => $populationDistribution, 'buttonText' => "परिवर्तन गर्नुहोस्", 'numberConverter' => $numberConverter])
</form>
