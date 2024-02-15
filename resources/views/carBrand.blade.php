@extends('main')

@section('container')
    <div class="row">
        @foreach ($carBrand as $car)
            <div class="col-md-4">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{ url('/image/' . $car->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->carBrand }} {{ $car->carModel }}</h5>
                        <p class="card-text">{{ $car->carDesc }} <a href="/cars/{{ $car->slug }}">read more..</a></p>
                        <p class="card-text"><small class="text-muted">{{ $car->created_at }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

