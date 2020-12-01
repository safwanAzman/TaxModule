<!DOCTYPE html>
<html x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eCouncil</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>


  {{--   <link rel="stylesheet" href="./assets/css/tailwind.output.css" /> --}}

     <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
     {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link rel="icon" href="{{asset('img/eCouncil_biru.png')}}" type="image/gif" sizes="18x18">
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

{{-- <script src="./assets/js/init-alpine.js"></script>

    <script src="./assets/js/charts-lines.js" defer></script>

    <script src="./assets/js/charts-pie.js" defer></script> --}}


    <script src="{{ asset('theme/public/assets/js/init-alpine.js')}}"></script>

    <script src="{{ asset('theme/public/assets/js/charts-lines.js')}}" defer></script>

    <script src="{{ asset('theme/public/assets/js/charts-pie.js')}}" defer></script>

    @livewireStyles

  </head>
  <body>

    @include('include.sidebar.navbar')


    <div class="flex bg-gray-50" style="height: 93vh;":class="{ 'overflow-hidden': isSideMenuOpen }">
      
      @include('include.sidebar.desktop')
      
      @include('include.sidebar.mobile')

      <div class="flex flex-col flex-1 w-full">
       
        <main class="overflow-y-auto">
          <div class="px-2 mx-auto grid pb-10">
            {{-- content --}}
             @yield('content')
          </div>
        </main>

      </div>
    </div>
    @livewireScripts
  </body>
</html>

