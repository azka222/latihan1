@extends('main')

@section('container')
    <div class="card mb-3">
        <img src="{{ url('/image/' . $car->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $car->carBrand }} {{ $car->carModel }}</h5>
          <h6>by {{ $car->user->name }}</h6>
          <p class="card-text">{{ $car->carInformation }}</p>
          <p class="card-text"><small class="text-muted">{{ $car->created_at }}</small></p>
        </div>
      </div>
@endsection