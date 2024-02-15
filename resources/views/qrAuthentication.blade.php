<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR-Authentication</title>
</head>
<body>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Google Authenticator</div>
​
                <div class="panel-body" style="text-align: center;">
                    <p>Anda dapat menggunakan two factor authentication dengan melakukan scan pada barcode dibawah. Alternatif lainnya, anda dapat menggunakan code berikut: {{ $secret }}</p>
                    <div>
                        <img src="{{ $QR_Image }}">
                    </div>
                    <p>Anda harus mengatur Google Authenticator app sebelum melanjutkan.</p>
                    <div>
                        <a href="/complete-registration"><button class="btn-primary">Selesaikan Pendaftaran</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>