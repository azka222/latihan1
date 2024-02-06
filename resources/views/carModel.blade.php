@extends('main')

@section('container')
    <article>
        <h6>by {{ $car->user->name }}</h6>
        <h2>{{ $car->carBrand }} {{ $car->carModel }}</h2>
        <p>{{ $car->carInformation }}</p>

    </article>
@endsection