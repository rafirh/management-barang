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
          <form action="{{ route('dashboard.transactions.update', $transaction->id) }}" class="card" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-2">
                  <div class="form-label required">Tipe</div>
                  <select class="form-select @error('type') is-invalid @enderror" name="type">
                    <option value="" disabled selected>Pilih</option>
                    @foreach ($types as $type)
                      <option value="{{ $type }}"
                        {{ old('type') ?? $transaction->type == $type ? 'selected' : '' }}>
                        {{ $type }}
                      </option>
                    @endforeach
                  </select>
                  @error('type')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <div class="form-label required">Tanggal</div>
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="5" width="16" height="16" rx="2" />
                        <line x1="16" y1="3" x2="16" y2="7" />
                        <line x1="8" y1="3" x2="8" y2="7" />
                        <line x1="4" y1="11" x2="20" y2="11" />
                        <line x1="11" y1="15" x2="12" y2="15" />
                        <line x1="12" y1="15" x2="12" y2="18" />
                      </svg>
                    </span>
                    <input class="form-control @error('date') is-invalid @enderror" name="date"
                      placeholder="Tanggal jadwal" id="date-input" value="{{ old('date') ?? $transaction->date }}"
                      autocomplete="off">
                  </div>
                  @error('date')
                    <div class="text-danger fs-5 mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <div class="form-label required">Barang</div>
                  <select class="form-select @error('inventory_id') is-invalid @enderror" name="inventory_id" disabled>
                    <option value="" disabled selected>Pilih</option>
                    @foreach ($inventories as $inventory)
                      <option value="{{ $inventory->id }}"
                        {{ old('inventory_id') ?? $transaction->inventory_id == $inventory->id ? 'selected' : '' }}>
                        {{ $inventory->name }}
                      </option>
                    @endforeach
                  </select>
                  @error('inventory_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12 mb-2">
                  <label class="form-label required">Jumlah</label>
                  <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty"
                    placeholder="Masukkan jumlah barang" value="{{ old('qty') ?? $transaction->qty }}" />
                  @error('qty')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-12">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="3"
                    placeholder="Masukkan deskripsi barang">{{ old('desc') ?? $transaction->desc }}</textarea>
                  @error('desc')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer d-flex">
              <a href="{{ getPreviousUrl('dashboard.transactions.index') }}"
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
