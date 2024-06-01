<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="https://seal.or.id/favicon.ico" type="image/x-icon">
    <title>404 Not found</title>
    <!-- CSS files -->
    <link href="{{ asset('plugins/tabler/dist/css/tabler.min.css?1669759017') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/tabler/dist/css/tabler-flags.min.css?1669759017') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/tabler/dist/css/tabler-payments.min.css?1669759017') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/tabler/dist/css/tabler-vendors.min.css?1669759017') }}" rel="stylesheet"/>
    <link href="{{ asset('plugins/tabler/dist/css/demo.min.css?1669759017') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1669759017"></script>
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="empty">
          <div class="empty-header">404</div>
          <p class="empty-title">
            Oops… Anda tersesat
          </p>
          <p class="empty-subtitle text-muted">
            Maaf, halaman yang anda cari tidak ditemukan
          </p>
          <div class="empty-action">
            <a href="{{ route('redirectByRole') }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg>
              Kembali ke beranda
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('plugins/tabler/dist/js/tabler.min.js?1669759017') }}" defer></script>
    <script src="{{ asset('plugins/tabler/dist/js/demo.min.js?1669759017') }}" defer></script>
  </body>
</html>
