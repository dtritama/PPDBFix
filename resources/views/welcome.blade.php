<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB SMK Semangat 45</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light p-0 mt-2">
        <a class="navbar-brand">.</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <section class="content mt-5">
        <div class="row">
            <div class="col-md-6" style="margin-top: 100px;">
                <p class="text text-secondary m-0">Selamat Datang di</p>
                <h3 class="h3 font-weight-bold">PPDB SMK Semangat 45</h3>
                <a class="btn btn-primary rounded-pill px-4" href="{{ route('daftars.create') }}">Daftar Sekarang !</a>
                <a class="btn btn-primary rounded-pill px-4" href="{{ route('daftars.index') }}">Data Pendaftar</a>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('5293.jpg') }}" alt="5293.jpg">
            </div>
        </div>
    </section>
</div>

</body>
</html>