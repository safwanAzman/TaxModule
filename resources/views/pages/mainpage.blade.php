@extends('default.default')
@section('content')
<style>
  .tooltip .tooltip-text {
    visibility: hidden;
    text-align: center;
    padding: 2px 6px;
    position: absolute;
    z-index: 100;
    }
    .tooltip:hover .tooltip-text {
    visibility: visible;
    }
</style>
<div class="py-20 flex items-center justify-center">
    <div class="grid grid-cols-12 gap-1">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="#" onclick="test()">
              <div class="flex items-center">
                <span>Halaman Utama</span>
              </div>
            </div>
            <div class="grid gap-10 lg:grid-cols-6 sm:grid-cols-6">
              
                <!-- penilaian  -->
                  <a href="{{route('Penilaian.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <img class="h-32 w-32" src="{{ asset('img/icon/penilaian.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Cukai Taksiran -->
                  <a href="{{route('Cukai-Taksiran.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-32 w-32" src="{{ asset('img/icon/cukai taksiran.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Sewa -->
                  <a href="{{route('Sewa.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-32 w-32" src="{{ asset('img/icon/sewaan.png') }}">
                      </div>
                    </div>
                  </a>

                  
                  <!--Tempahan -->
                  <a href="{{route('Tempahan.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full ">
                        <img class="h-32 w-32" src="{{ asset('img/icon/tempahan.png') }}">
                      </div>
                    </div>
                  </a>

                  <!--Bil Pelbagai -->
                  <a href="{{route('BilPelbagai.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full ">
                        <img class="h-32 w-32" src="{{ asset('img/icon/bil pelbagai.png') }}">
                      </div>
                    </div>
                  </a>

                   <!--Kutipan -->
                  <a href="{{route('Kutipan.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full ">
                        <img class="h-32 w-32" src="{{ asset('img/icon/kutipan.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Remisi -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Remisi.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Lesen -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Lesen.png') }}">
                      </div>
                    </div>
                  </a>

                

                  <!-- Kompaun -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Kompaun.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Cagaran -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Cagaran.png') }}">
                      </div>
                    </div>
                  </a>



                   <!-- Lanjar Am-->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Lejar Am.png') }}">
                      </div>
                    </div>
                  </a>

                   <!--Belanjawan-->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                        <img class="h-32 w-32" src="{{ asset('img/icon/Belanjawan.png') }}">
                      </div>
                    </div>
                  </a>


            </div>
        </div>
    </div>
</div>


@endsection
