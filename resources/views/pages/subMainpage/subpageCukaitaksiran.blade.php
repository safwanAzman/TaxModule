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
            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="#" onclick="test()">
              <div class="flex items-center">
                <span>Cukai Taksiran</span>
              </div>
            </div>
            <div class="grid gap-20 lg:grid-cols-6 sm:grid-cols-6">
              
                <!-- Senarai Harta -->
                  <a href="{{route('SenaraiHartaCukai.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <img class="h-32 w-32" src="{{ asset('img/icon/senarai harta.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Proses Bil Cukai -->
                  <a href="{{route('ProsesBilCukai.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <img class="h-32 w-32" src="{{ asset('img/icon/proses bil cukai.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Proses Notis Cukai -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Proses Waran Cukai -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Senarai Waran -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Lulus Pindah Milik -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- batch Jernal-->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Data File peringatan -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Laporan -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Lulus -->
                  <a href="#" class="h-32 w-32 relative cursor-pointer mb-5 tooltip">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <span class="tooltip-text  text-black text-xs font-semibold">In Progress</span>
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>
            </div>
        </div>
    </div>
</div>


@endsection
