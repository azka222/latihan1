<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b></b><br>Register</h2>
            <hr>
            @if (Session::get('errorPassword') == 'error')
                <div class="alert alert-danger" role="alert">
                    Password doesn't match!
                </div>
                @php
                    Session::forget('errorPassword');
                @endphp
            @endif
            <form action="register" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                        minlength="8" required="">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm Password" minlength="8" required="" required="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="2faCheckbox" name="uses_two_factor_auth"
                        value="1">
                    <label class="form-check-label" for="2faCheckbox">
                        Two Factor Authentication
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <hr>
            </form>
        </div>
    </div>
</body>

</html>
