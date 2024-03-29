@extends('main')

@section('container')
    <h1>Account Info</h1>
    <h2>Name : {{ $user->name }}</h2>
    <h2>Email : {{ $user->email }}</h2>
    <form id="2faForm" method="post" action="{{ route('set2FA') }}" class="mt-4">
        @csrf
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="toggle" id="flexSwitchCheckDefault" {{ $user->uses_two_factor_auth ? 'checked' : '' }}>
            <label class="form-check-label" for="flexSwitchCheckDefault">Two Factor Authentication</label>
        </div>
    </form>
    
    <a href="/carsAuthor">
        <button type="button" class="btn btn-primary mt-4">See My Car</button>
    </a>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#flexSwitchCheckDefault').change(function() {
                $('#2faForm').submit();
            });
        });
    </script>
    
    
@endsection
