<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
</head>
<body>
    @extends('backend.v_layouts.app')
    @section('content')
    <!-- contentAwal -->
    <h3>{{$judul}}</h3>
    <p> Selamat Datang, <b>{{Auth::user()->nama}}</b> pada aplikasi Toko Online dengan hak akses yang anda miliki sebagai 
        <b>
        @if (Auth::user()->role ==1)
        Super Admin
        @elseif(Auth::user()->role ==0)
        Admin
        @endif
    </b> ini adalah halaman utama dari aplikasi ini. </p>
    <!-- contentAwal -->
    @endsection
</body>
</html>