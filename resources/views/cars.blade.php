@extends('main')

@section('container')
    
        @foreach ($cars as $car)
        <article class="mb-5">
            <h2>
                <a href="/cars/{{ $car->slug }}">{{ $car->carBrand }} {{ $car->carModel}}</a>
            </h2>
            <h6>Mobil {{ $car->carBrand }} dengan kategori {{ $car->category->nameCategory }}</h6>
            <p>{{ $car->carInformation}}</p>
        </article>
  
    @endforeach
@endsection
