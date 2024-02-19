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
    <div class=""><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b></b><br>QR Authentication Using Google Authenticator</h3>
                <hr>
                <div class="text-justify">
                    <p>Anda dapat menggunakan two factor authentication dengan melakukan scan pada barcode dibawah.
                        Alternatif lainnya, anda dapat menggunakan code berikut: {{ $secret }}</p>
                </div>
                <div class="text-center">
                    <img src="{!! $QR_Image !!}"/>
                    
                    <p>Anda harus mengatur Google Authenticator app sebelum
                    melanjutkan.</p>

                    <a href="/google2fa.otpVerify"><button class="btn-primary">Masukkan OTP</button></a>
                </div>


        </div>
    </div>
</body>

</html>
