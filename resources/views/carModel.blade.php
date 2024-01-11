@extends('main')

@section('container')
    <article>
        <h2>{{ $car->carBrand }} {{ $car->carModel }}</h2>
        <p>{{ $car->carInformation }}</p>

    </article>
@endsection