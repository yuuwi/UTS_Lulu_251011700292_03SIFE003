@extends('layouts.app')

@section('title', $recipe->name)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}" style="max-height: 400px; object-fit: cover;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-success fs-6">{{ $recipe->category }}</span>
                    <span class="text-muted fw-bold">⏱️ {{ $recipe->cook_time }}</span>
                </div>
                <h2 class="card-title fw-bold mb-4">{{ $recipe->name }}</h2>

                <h5 class="fw-bold text-success">Bahan-bahan:</h5>
                <p class="bg-light p-3 rounded text-secondary">{{ $recipe->ingredients }}</p>

                <h5 class="fw-bold text-success mt-4">Langkah-langkah:</h5>
                <p class="bg-light p-3 rounded text-secondary" style="white-space: pre-line;">{{ $recipe->steps }}</p>

                <div class="mt-4">
                    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">&laquo; Kembali ke Daftar Resep</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection