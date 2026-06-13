@extends('layouts.index')
@section('title', 'Karya Ilmiah & Paper')

@section('content')
<div class="card border-0 shadow-sm rounded-4 mb-4 bg-primary text-white overflow-hidden position-relative">
    <div class="position-absolute top-0 end-0 h-100 w-50" style="background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 80%);"></div>
    <div class="card-body p-4 position-relative z-index-1">
        <h4 class="fw-semibold text-white mb-1">Publikasi & Karya Ilmiah</h4>
        <p class="mb-0 opacity-75">Daftar penelitian, artikel akademik, dan pengembangan sistem pendidikan.</p>
    </div>
</div>

<!-- Paper List 1 -->
<div class="card border-0 shadow-sm rounded-4 mb-3 hover-card">
    <div class="card-body p-4">
        <div class="d-flex align-items-start">
            <div class="bg-light-info text-info rounded-3 d-flex align-items-center justify-content-center me-4 flex-shrink-0" style="width: 60px; height: 60px;">
                <i class="ti ti-file-text" style="font-size: 1.8rem;"></i>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="badge bg-info-subtle text-info rounded-pill fw-semibold">Jurnal Pendidikan</span>
                    <small class="text-muted"><i class="ti ti-calendar me-1"></i> April 2026</small>
                </div>
                <h5 class="fw-bold mb-2 text-dark">Penerapan Penilaian Formatif Harian Berbasis Web pada Siswa Kejuruan</h5>
                <p class="text-muted fs-3 mb-3">Penelitian ini membahas efektivitas penggunaan portal pelacakan nilai mandiri untuk memantau pemahaman siswa sebelum dan sesudah pembelajaran harian.</p>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="text-primary fw-semibold fs-3"><i class="ti ti-download me-1"></i> Unduh PDF</a>
                    <a href="#" class="text-dark fw-semibold fs-3"><i class="ti ti-external-link me-1"></i> Baca Online</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Paper List 2 -->
<div class="card border-0 shadow-sm rounded-4 mb-3 hover-card">
    <div class="card-body p-4">
        <div class="d-flex align-items-start">
            <div class="bg-light-success text-success rounded-3 d-flex align-items-center justify-content-center me-4 flex-shrink-0" style="width: 60px; height: 60px;">
                <i class="ti ti-video" style="font-size: 1.8rem;"></i>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="badge bg-success-subtle text-success rounded-pill fw-semibold">Artikel Praktik Topik Digital</span>
                    <small class="text-muted"><i class="ti ti-calendar me-1"></i> Mei 2026</small>
                </div>
                <h5 class="fw-bold mb-2 text-dark">Integrasi Audio AI dalam Produksi Video E-Learning Pembelajaran</h5>
                <p class="text-muted fs-3 mb-3">Analisis tentang penggunaan teknologi kecerdasan buatan dalam memproses dan melakukan mixing audio untuk meningkatkan kualitas materi ajar visual.</p>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="text-primary fw-semibold fs-3"><i class="ti ti-download me-1"></i> Unduh PDF</a>
                    <a href="#" class="text-dark fw-semibold fs-3"><i class="ti ti-external-link me-1"></i> Baca Online</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-card { transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; }
    .hover-card:hover { transform: translateY(-3px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.08)!important; }
</style>
@endsection