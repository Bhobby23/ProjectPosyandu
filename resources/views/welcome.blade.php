@extends('layout.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-white" id="beranda">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold mb-4">Selamat Datang di Posyandu</h1>
                <p class="lead mb-4">Memberikan pelayanan kesehatan terbaik untuk masyarakat dengan penuh dedikasi.</p>
                {{-- <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a> --}}
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5" id="layanan">
    <div class="container">
        <h2 class="text-center mb-5">Layanan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-heart-pulse feature-icon mb-3"></i>
                        <h4>Pemeriksaan Kesehatan</h4>
                        <p>Pemeriksaan rutin untuk memantau kesehatan ibu dan anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-clipboard2-pulse feature-icon mb-3"></i>
                        <h4>Konsultasi</h4>
                        <p>Konsultasi kesehatan dengan tenaga medis profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-capsule feature-icon mb-3"></i>
                        <h4>Imunisasi</h4>
                        <p>Program imunisasi lengkap untuk anak-anak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light" id="tentang">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about.jpg') }}" alt="About" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Tentang Posyandu</h2>
                <p class="lead">Posyandu adalah pusat pelayanan kesehatan terpadu yang melayani masyarakat dengan fokus pada kesehatan ibu dan anak.</p>
                <p>Kami berkomitmen untuk memberikan pelayanan terbaik dengan didukung oleh tenaga kesehatan yang profesional dan fasilitas yang memadai.</p>
                <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5" id="kontak">
    <div class="container">
        <h2 class="text-center mb-5">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection