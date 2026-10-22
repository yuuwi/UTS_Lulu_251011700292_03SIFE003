@extends('layouts.app')

@section('title', 'Daftar Resep Masakan')

@section('content')
<div class="p-4 mb-4 bg-white rounded-3 shadow-sm text-center">
    <h1 class="display-6 fw-bold text-success">Welcome To Portal Resep Masakan</h1>
    <p class="text-secondary mb-1">NIM: 251011700292</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($recipes as $recipe)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <span class="badge bg-success mb-2">{{ $recipe->category }}</span>
                    <h5 class="card-title fw-bold">{{ $recipe->name }}</h5>
                    <p class="card-text text-muted small">⏱️ {{ $recipe->cook_time }}</p>
                </div>
                <div class="card-footer bg-white border-0 pt-0">
                    <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary w-100">Lihat Resep</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $recipes->links() }}
</div>
@endsection