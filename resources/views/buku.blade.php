@extends('layouts.index')
@section('title', 'Koleksi E-Book')

@section('content')
<div class="d-sm-flex d-block align-items-center justify-content-between mb-4">
    <h5 class="card-title fw-semibold mb-0">Koleksi E-Book & Modul</h5>
    <div class="mt-3 mt-sm-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari modul...">
            <button class="btn btn-primary" type="button"><i class="ti ti-search"></i></button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden w-100 hover-card">
            <div class="bg-light" style="height: 200px; overflow: hidden;">
                <img src="https://penerbiteureka.com/wp-content/uploads/2024/11/Dasar-Pemrograman-Mobile-Dengan-Kotlin-760x490.jpg" alt="Sampul Modul Android" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-body p-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill mb-2 fw-semibold">Pemrograman</span>
                <h6 class="fw-bold fs-4 mb-2">Dasar Pemrograman Android dengan Kotlin</h6>
                <p class="text-muted fs-3 mb-4">Modul praktis pengenalan layout dan logika dasar pembuatan aplikasi mobile sederhana untuk pemula.</p>
                <a href="#" class="btn btn-outline-primary w-100 rounded-pill">Baca Sekarang</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden w-100 hover-card">
            <div class="bg-light" style="height: 200px; overflow: hidden;">
                <img src="https://sanbercode.com/storage/photos/shares/Tentang%20Kelas%20Ebook/photo_1_2023-03-29_22-03-56.jpg" alt="Sampul Modul UI/UX" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-body p-4">
                <span class="badge bg-success-subtle text-success rounded-pill mb-2 fw-semibold">Desain UI/UX</span>
                <h6 class="fw-bold fs-4 mb-2">Panduan Desain Antarmuka dengan Figma</h6>
                <p class="text-muted fs-3 mb-4">Langkah demi langkah merancang antarmuka aplikasi yang profesional dan ramah pengguna.</p>
                <a href="#" class="btn btn-outline-success w-100 rounded-pill">Baca Sekarang</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden w-100 hover-card">
            <div class="bg-light" style="height: 200px; overflow: hidden;">
                <img src="https://cdn.gramedia.com/uploads/product-metas/st-tsesnaz.jpg" alt="Sampul Modul PHP" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-body p-4">
                <span class="badge bg-warning-subtle text-warning rounded-pill mb-2 fw-semibold">Pengembangan Web</span>
                <h6 class="fw-bold fs-4 mb-2">Manajemen Basis Data & PHP Native</h6>
                <p class="text-muted fs-3 mb-4">Penerapan sistem CRUD dan integrasi database MySQL untuk manajemen data akademik sekolah.</p>
                <a href="#" class="btn btn-outline-warning w-100 rounded-pill">Baca Sekarang</a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-card { transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; }
    .hover-card:hover { transform: translateY(-5px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; }
</style>
@endsection