<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB SMK Semangat 45</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body onload="window.print()">
    <div class="container">
        <h4 class="mt-5">Selamat, Anda sudah terdaftar di SMK Semangat 45 !</h4>
        <h5>Berikut data anda :</h5>
        <table class="mr-auto mt-4 font-weight-bold">
            <tr>
                <td>No Reg : {{ $siswa->id }}</td>
            </tr>
            <tr>
                <td>Nama : {{ $siswa->namalengkap }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin : {{ $siswa->jk }}</td>
            </tr>
            <tr>
                <td>Alamat : {{ $siswa->alamatlengkap }}</td>
            </tr>
            <tr>
                <td>Asal Sekolah : {{ $siswa->asalsmp }}</td>
            </tr>
            <tr>
                <td>Minat Jurusan : {{ $siswa->jurusan }}</td>
            </tr>
        </table>
    </div>
    <a class="btn btn-primary" href="{{ route('daftars.index') }}"> Selesai</a>
</body>
</html>