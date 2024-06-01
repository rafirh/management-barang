@extends('dashboard.main')

@section('custom-css')
@endsection

@section('content')
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center justify-content-center">
        <div class="col-md-6">
          <h2 class="page-title">
            {{ $title }}
          </h2>
        </div>
      </div>
    </div>
  </div>

  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards justify-content-center">
        <div class="col-md-6">
          <form action="{{ route('dashboard.inventory-categories.update', $category->id) }}" class="card" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-2">
                  <label class="form-label required">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    placeholder="Masukkan nama barang" value="{{ old('name') ?? $category->name }}" />
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="3"
                    placeholder="Masukkan deskripsi barang">{{ old('desc') ?? $category->desc }}</textarea>
                  @error('desc')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer d-flex">
              <a href="{{ getPreviousUrl('dashboard.inventory-categories.index') }}"
                class="btn me-auto">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('library-js')
@endsection

@section('custom-js')
@endsection
