@extends('main')
@section('title', 'Dashboard')

@section('content')
    <div class="container container-home">
        <div class="row align-items-center pt-4">
            <div class="col-sm-6 text-home">
                <h1 class="fs-2">Halo Semeton Desa Saba.</h1>
                <h3 class="mt-5">Informasi!</h3>
                <P class="fs-5 mb-5">Sampah akan diangkut setiap 2 hari sekali!</P>
                <div class="pb-1">Belum punya akun? Yuk buat dulu!</div>
                <a class=" btn btn-success btn-lg mb-5 border border-success btn-angkut " href="#"
                    role="button">Registrasi</a>
            </div>
            <div class="col-sm-6">
                <img src="./images/home.png" class="img-fluid" alt="Home Image">
            </div>
        </div>
    </div>
@endsection
