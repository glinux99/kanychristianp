<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.header')
    <body id="bg">
    <div class="page-wraper roboto-condensed">
    {{-- <div id="loading-area"></div> --}}
        @include('layouts.appbar')
        <!-- Content -->
      <main>
        @yield('content')
      </main>
        <!-- Content END -->
          <!-- Footer -->
         @include('layouts.footer')
        <!-- Footer END -->
        <button class="scroltop style3" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    @include('layouts.script')
</body>
</html>
