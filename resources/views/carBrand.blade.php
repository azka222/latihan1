@extends('main')

@section('container')
    <article>
        @foreach ($carBrand as $car)
             <h2>
                <a href="/cars/{{ $car->slug }}">{{ $car->carBrand }} {{ $car->carModel }}</a>
             </h2>
             <p>{{ $car->carInformation }}</p>
        @endforeach
    </article>
@endsection