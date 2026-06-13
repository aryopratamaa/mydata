@extends('layouts.index')
@section('title', 'Sekolahku')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="row g-0">
        <!-- Sisi Kiri: Visual Sekolah -->
        <div class="col-md-5 bg-primary d-flex flex-column align-items-center justify-content-center p-5 text-center position-relative">
            <!-- Efek Gradient Latar Belakang -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at top right, rgba(255,255,255,0.15) 0%, transparent 60%);"></div>

            <!-- Logo Sekolah (Menggunakan Icon Tabler sebagai placeholder) -->
            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-lg position-relative" style="width: 130px; height: 130px; border: 4px solid rgba(255, 255, 255, 0.35); overflow: hidden;">
                <i class="ti ti-school text-primary" style="font-size: 4.5rem;"></i>
            </div>
            
            <h3 class="fw-bolder text-white mb-1 position-relative">SMKN 1 Air Putih</h3>
            <span class="badge bg-white text-primary rounded-pill px-3 py-2 mt-2 fw-semibold shadow-sm position-relative">Sekolah Menengah Kejuruan</span>
        </div>

        <!-- Sisi Kanan: Detail Informasi -->
        <div class="col-md-7 p-4 p-md-5 bg-white">
            <h5 class="fw-bold mb-4 pb-2" style="border-bottom: 2px dashed #f0f2f5;">Informasi Sekolah</h5>

            <!-- Kotak Lokasi -->
            <div class="d-flex align-items-center mb-4 p-3 rounded-4 border border-light" style="background: linear-gradient(135deg, #fdfbfb 0%, #ffffff 100%); box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: transform 0.2s;">
                <div class="bg-light-danger text-danger rounded-3 d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 60px; height: 60px;">
                    <i class="ti ti-map-pin" style="font-size: 1.8rem;"></i>
                </div>
                <div>
                    <span class="text-muted fs-3 fw-semibold text-uppercase" style="letter-spacing: 1px;">Lokasi</span>
                    <h6 class="fw-bold mb-0 fs-5 mt-1 text-dark">Batu Bara, Sumatera Utara</h6>
                </div>
            </div>

            <!-- Kotak Program Keahlian -->
            <div class="d-flex align-items-center mb-4 p-3 rounded-4 border border-light" style="background: linear-gradient(135deg, #fdfbfb 0%, #ffffff 100%); box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: transform 0.2s;">
                <div class="bg-light-success text-success rounded-3 d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 60px; height: 60px;">
                    <i class="ti ti-certificate" style="font-size: 1.8rem;"></i>
                </div>
                <div>
                    <span class="text-muted fs-3 fw-semibold text-uppercase" style="letter-spacing: 1px;">Program Keahlian</span>
                    <h6 class="fw-bold mb-0 fs-5 mt-1 text-dark">RPL, TKJ, TKRO & KI</h6>
                </div>
            </div>

            <!-- Kotak Status Institusi -->
            <div class="d-flex align-items-center p-3 rounded-4 border border-light" style="background: linear-gradient(135deg, #fdfbfb 0%, #ffffff 100%); box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: transform 0.2s;">
                <div class="bg-light-info text-info rounded-3 d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 60px; height: 60px;">
                    <i class="ti ti-building-bank" style="font-size: 1.8rem;"></i>
                </div>
                <div>
                    <span class="text-muted fs-3 fw-semibold text-uppercase" style="letter-spacing: 1px;">Status Instansi</span>
                    <h6 class="fw-bold mb-0 fs-5 mt-1 text-dark">Sekolah Negeri Terakreditasi</h6>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection