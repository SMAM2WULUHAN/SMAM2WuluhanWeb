@extends('layouts.app1')

@section('content')
    <!-- Hero Section -->
    <div class="row mt-4 text-center">
        <h2>KONTAK - Saran Positif</h2>
        </div>
        <div class="row mt-1">
            <div class="container mt-1">
                <div class="col-md-6 mx-auto text-center">
                    <p class="mt-3" style="text-align: justify">
                     Saran dan kritik merupakan dua hal yang penting dalam kehidupan untuk membantu kita berkembang dan menjadi lebih baik. Baik saran maupun kritik, jika disampaikan dengan cara yang tepat, dapat memberikan manfaat bagi individu maupun suatu organisasi.
                    </p>
                    <p class="mt-3" style="text-align: justify">
                    Note : Semua identitas Anda kami rahasiakan disini. Terima kasih
                    </p>
                </div> 
             </div>
        </div>
    </div>

    <!--form-->
<div class="row container mt-5 d-flex justify-content-center align-items-center">
    <h2></h2>
    <form>
    <div class="mb-3 text-center">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
    </div>
    <div class="mb-3 text-center">
        <label for="masukan" class="form-label">Masukan</label>
        <textarea class="form-control" id="masukan" rows="3" placeholder="Masukkan masukan Anda" required></textarea>
    </div>
    <div class="mb-3 text-center">
        <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
        <input type="tel" class="form-control" id="whatsapp" placeholder="Masukkan nomor WhatsApp Anda" required>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" id="kirim" class="btn btn-primary d-flex justify-content-center">Kirim</button>
    </div>
</form>

<script>
    document.getElementById('kirim').addEventListener('click', function(event) {
        // Ambil nilai input
        const nama = document.getElementById('nama').value;
        const masukan = document.getElementById('masukan').value;
        const whatsapp = document.getElementById('whatsapp').value;

        // Validasi input
        if (nama && masukan && whatsapp) {
            const pesan = `Halo, saya ${nama}. Berikut adalah masukan saya: ${masukan}. Nomor WhatsApp: ${whatsapp}`;
            const url = `https://wa.me/6285330712526?text=${encodeURIComponent(pesan)}`;
            // Arahkan ke URL WhatsApp
            window.open(url, '_blank');
        } else {
            alert('Harap isi semua field!');
        }
    });
</script>

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
@endsection