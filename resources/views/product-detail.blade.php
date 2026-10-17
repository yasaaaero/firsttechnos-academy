
@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container py-4">

    <a href="{{ route('product.index') }}"
       class="btn btn-light shadow-sm mb-4">
        ← Kembali
    </a>

    <div class="row g-4 align-items-start">

        {{-- Gambar program --}}
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm overflow-hidden">
                @if ($product->image)
                    <img
                        src="{{ asset($product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-100"
                        style="height: 420px; object-fit: cover;"
                    >
                @else
                    <div class="d-flex align-items-center justify-content-center bg-light"
                         style="height: 420px;">
                        <span class="text-secondary">
                            Gambar program belum tersedia
                        </span>
                    </div>
                @endif
            </div>
        </div>

        {{-- Informasi program --}}
        <div class="col-lg-5">
            <span class="badge bg-success mb-3">
                {{ $product->is_active ? 'Tersedia' : 'Tidak tersedia' }}
            </span>

            <h1 class="fw-bold text-white mb-3">
                {{ $product->name }}
            </h1>

            <span class="badge bg-primary mb-3">
                {{ $product->category }}
            </span>

            <p class="text-white fs-5">
                {{ $product->description }}
            </p>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body p-4">
                    <p class="mb-3">
                        <strong>Level:</strong>
                        {{ $product->level }}
                    </p>

                    <p class="mb-3">
                        <strong>Durasi:</strong>
                        {{ $product->duration }}
                    </p>

                    <hr>

                    <p class="text-secondary mb-1">
                        Harga program
                    </p>

                    <h2 class="fw-bold text-primary mb-0">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h2>
                </div>
            </div>

            <a href="{{ route('product.index') }}"
               class="btn btn-light mt-4 px-4 py-2">
                Lihat Program Lain
            </a>
        </div>

    </div>
</div>
@endsection
