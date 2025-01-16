@extends('layouts.app1')

@section('content')

<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indikator -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('gambar/bannersmam2.jpg') }}" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('gambar/banner smam.jpg') }}" class="d-block w-100" alt="Slide 2">
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<style>
    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>


<!-- box biru panjang -->
<div class="bg-primary p-3 text-white">
</div>

<!-- informasi sekolah -->
<div class="col-12 text-center">
        <p></p>
    <h1>INFORMASI SEKOLAH</h1>
    <p></p>
</div>

    <!--PP-->
    
    
        <div class="row mt-1">
            <div class="container mt-9">
                <div class="row">
                    <div class="col-md-10 mx-auto text-center">
                     <p class="mt-3" style="text-align: justify">
                     SMAS MUHAMMADIYAH 2 WULUHAN merupakan salah satu sekolah jenjang SMA berstatus Swasta yang berada di wilayah Kec. Wuluhan, Kab. Jember, Jawa Timur. SMAS MUHAMMADIYAH 2 WULUHAN didirikan pada tanggal 6 Mei 1978 dengan Nomor SK Pendirian 3722/XI-II/J.Tm-72/78 yang berada dalam naungan Kementerian Pendidikan dan Kebudayaan. Dalam kegiatan pembelajaran, sekolah yang memiliki 157 siswa ini dibimbing oleh 20 guru yang profesional di bidangnya. Kepala Sekolah SMAS MUHAMMADIYAH 2 WULUHAN saat ini adalah Alim Purnomosidi. Operator yang bertanggung jawab adalah Ponijan.
                        </p>
                     <p class="mt-3" style="text-align: justify">
                     Dengan adanya keberadaan SMAS MUHAMMADIYAH 2 WULUHAN, diharapkan dapat memberikan kontribusi dalam mencerdaskan anak bangsa di wilayah Kec. Wuluhan, Kab. Jember.
                     </p>
                     
                   </div> 
                </div>
            </div>
        </div>

<!-- INFORMASI PENDAFTARAN -->
<div class="col-12 text-center">
    <h1>INFORMASI PENDAFTARAN</h1>
    

<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indikator -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('gambar/info.jpg') }}" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('gambar/ppdb2025.jpg') }}" class="d-block w-100" alt="Slide 2">
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>
</div>

<style>
    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>
<p class="mt-3" style="text-align: center">
        Informasi lebih lanjut silahkan hubungi kontak, terima kasih.
    </p>

<!-- berita -->

<div class="row mt-4 text-center">


<!-- maps -->

<div class="col-12 text-center">
</div>
<div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-4">
        <div class="card" style="border: none;">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text text-center"></p>
            </div>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Lokasi Google Maps</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.6278397493975!2d113.55302627457884!3d-8.339725491696614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd684bb8cce38d3%3A0x87c77ca3e6f9109f!2sSMA%20Muhammadiyah%202%20Wuluhan!5e0!3m2!1sid!2sid!4v1734704522837!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection