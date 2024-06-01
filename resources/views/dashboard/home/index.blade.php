@extends('dashboard.main')

@section('custom-css')
@endsection

@section('content')
  {{-- Page Header --}}
  <div class="page-header d-print-none mt-2">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h3 class="page-title">
            {{ $title }}
          </h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="row row-cards">
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-teal text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-details">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M13 5h8" />
                          <path d="M13 9h5" />
                          <path d="M13 15h8" />
                          <path d="M13 19h5" />
                          <path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                          <path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $inventoryCount }}
                      </div>
                      <div class="text-muted">
                        total barang
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-indigo text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M4 4h6v6h-6z" />
                          <path d="M14 4h6v6h-6z" />
                          <path d="M4 14h6v6h-6z" />
                          <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $categoryCount }}
                      </div>
                      <div class="text-muted">
                        kategori
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-azure text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-box">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                          <path d="M12 12l8 -4.5" />
                          <path d="M12 12l0 9" />
                          <path d="M12 12l-8 -4.5" />
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $stockCount }}
                      </div>
                      <div class="text-muted">
                        total stok
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-cyan text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-transfer-down"
                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M17 3v6"></path>
                          <path d="M10 18l-3 3l-3 -3"></path>
                          <path d="M7 21v-18"></path>
                          <path d="M20 6l-3 -3l-3 3"></path>
                          <path d="M17 21v-2"></path>
                          <path d="M17 15v-2"></path>
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $transactionCount }}
                      </div>
                      <div class="text-muted">
                        total transaksi
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-success text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-down">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M16 15l-4 4" />
                          <path d="M8 15l4 4" />
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $transactionInCount }}
                      </div>
                      <div class="text-muted">
                        transaksi masuk
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-danger text-white avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-up">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M16 9l-4 -4" />
                          <path d="M8 9l4 -4" />
                        </svg>
                      </span>
                    </div>
                    <div class="col">
                      <div class="fw-bold">
                        {{ $transactionOutCount }}
                      </div>
                      <div class="text-muted">
                        transaksi keluar
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('library-js')
@endsection

@section('custom-js')
  <script></script>
@endsection
