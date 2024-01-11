@extends('main')

@section('container')
   <article>
    @foreach ($car_category as $car)
        <h2>
            <a href="/cars/{{ $car->slug }}">{{ $car->carBrand }} {{ $car->carModel }}</a>
        </h2>
        <p>{{ $car->carInformation }}</p>
        
    @endforeach
   </article>
@endsection