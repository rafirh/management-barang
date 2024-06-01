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
          <form action="{{ route('dashboard.inventories.update', $inventory->id) }}" class="card" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-2">
                  <div class="form-label required">Kategori</div>
                  <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                    <option value="" disabled selected>Pilih</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ (old('category_id') ?? $category->id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                    @endforeach
                  </select>
                  @error('category_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label required">Kode</label>
                  <input type="text" class="form-control @error('code') is-invalid @enderror" name="code"
                    placeholder="Masukkan kode barang" value="{{ old('code') ?? $inventory->code }}" />
                  @error('code')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label required">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    placeholder="Masukkan nama barang" value="{{ old('name') ?? $inventory->name }}" disabled />
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label required">Harga <small class="text-muted">(Rp)</small></label>
                  <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    placeholder="Masukkan harga barang (Rp)" value="{{ old('price') ?? $inventory->price }}" />
                  @error('price')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label required">Stok</label>
                  <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock"
                    placeholder="Masukkan stok barang" value="{{ old('stock') ?? $inventory->stock }}" />
                  @error('stock')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="3"
                    placeholder="Masukkan deskripsi barang">{{ old('desc') ?? $inventory->desc }}</textarea>
                  @error('desc')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer d-flex">
              <a href="{{ getPreviousUrl('dashboard.inventories.index') }}"
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
