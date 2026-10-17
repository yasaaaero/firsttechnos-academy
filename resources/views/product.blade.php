
@extends('layouts.app')

@section('title', 'Our Product')

@section('content')
    <div class="mb-5 text-center">
        <h1 class="fw-bold">Our Learning Programs</h1>
        <p class="text-secondary">
            Temukan program belajar terbaik bersama FirstTechnos Academy.
        </p>
    </div>

    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-md-6 col-lg-4">

                <a
                    href="{{ route('product.show', $product->id) }}"
                    class="card h-100 shadow-sm text-decoration-none text-dark product-card"
                    style="transition: transform 0.2s ease, box-shadow 0.2s ease;"
                >
                    @if ($product->image)
                        <img
                            src="{{ asset($product->image) }}"
                            class="card-img-top"
                            alt="{{ $product->name }}"
                            style="height: 220px; object-fit: cover;"
                        >
                    @else
                        <div
                            class="d-flex align-items-center justify-content-center bg-light text-secondary"
                            style="height: 220px;"
                        >
                            Gambar program belum tersedia
                        </div>
                    @endif

                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary align-self-start mb-2">
                            {{ $product->category }}
                        </span>

                        <h5 class="card-title fw-bold">
                            {{ $product->name }}
                        </h5>

                        <p class="card-text text-secondary">
                            {{ $product->description }}
                        </p>

                        <p class="mb-1">
                            <strong>Level:</strong>
                            {{ $product->level }}
                        </p>

                        <p class="mb-1">
                            <strong>Duration:</strong>
                            {{ $product->duration }}
                        </p>

                        <p class="mt-auto pt-3 fw-bold text-primary mb-0">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>

                        <span class="text-primary fw-semibold mt-3">
                            Lihat Detail Program →
                        </span>
                    </div>
                </a>

            </div>
        @empty
            <div class="col-12 text-center">
                <p>Belum ada program pembelajaran.</p>
            </div>
        @endforelse
    </div>

    <style>
        .product-card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15) !important;
        }
    </style>
@endsection
