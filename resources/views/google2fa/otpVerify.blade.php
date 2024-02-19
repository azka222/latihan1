<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP Verification</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b></b><br>OTP Verification</h2>
            <hr>
            @if (Session::get('checkOTP') == 'error')
                <div class="alert alert-danger" role="alert">
                    OTP is invalid!
                </div>
                @php
                    Session::forget('checkOTP');
                @endphp
            @endif
            <form method="POST" action="{{ route('2fa') }}">
                @csrf
                <div class="form-group">
                    <label for="one_time_password">Enter Your OTP</label>
                    <input id="one_time_password" type="number" class="form-control" name="one_time_password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
            </form>
        </div>
    </div>
</body>

</html>
