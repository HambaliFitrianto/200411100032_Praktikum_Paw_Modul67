@extends('navbar')

@section('content')
<div class="container">
    <h2 class="text-primary" style="margin: 10px">About Me</h2>
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-5 mb-5 mb-md-0" style="margin: 10px;">
            <img src="{{ asset('foto.jpg')}}" alt="foto" width="100%">
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-5">
            <h5 class="text-primary text-center">San Sayidul Akdam Augusta</h5>
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-12">
            <h2 class="text-primary" style="margin: 10px">Background</h2>
            <p style="margin: 10px">
                Nama saya San Sayidus Solatal A`la, Saya berasal dari Sampang. Saya merupakan anak ke 3 dari 4 bersaudara. Saya bersekolah di TK Kemala Bhayangkari, lanjut di SDN Karang Dalem 6, SMPN 3 Sampang, dan melanjutkan ke jenjang SMA di SMAN 1 Sampang. Sekarang saya menempuh pendidikan di bangku kuliah di Universitas Trunojoyo Madura di prodi Teknik Informatika, saya memilih Universitas tersebut karena dekat dari rumah dan prodi ikut kakak saya, karena saya tertarik dari tampilan tulisan yang warna-warni.
            </p>
        </div>
        <div class="col-lg-12">
            <h2 class="text-primary" style="margin: 10px">Suka Duka Praktikum PAW</h2>
            <p style="margin: 10px">
                Suka duka selama praktikum, Suka bisa jumpa lagi sama kak indah, dukanya gara gara kelamaan online jadi setelah diadakan praktikum offline jadi merasa malas buat datang cuma buat praktikum dan bolak balik dari rumah ke telang.
            </p>
        </div>
    </div>
</div>

@endsection
