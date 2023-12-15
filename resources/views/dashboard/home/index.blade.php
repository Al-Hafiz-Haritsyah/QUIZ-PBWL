@extends('dashboard.layouts.main')

@section('main-body')
{{-- <h1>Ini adalah halaman Dashboard!</h1> --}}

<div class="alert alert-success" role="alert">
    Selamat datang, {{ auth()->user()->nama }}!
</div>
<div class="alert alert-success" role="alert">
    PLN-KU Merupakan Sistem Informasi Pelanggan PLN Kota Medan
</div>

  
@endsection
