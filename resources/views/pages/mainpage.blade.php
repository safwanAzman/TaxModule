@extends('default.default')
@section('content')

<div class="py-20 flex items-center justify-center">
    <div class="grid grid-cols-12 gap-1">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="grid gap-20 lg:grid-cols-4 sm:grid-cols-4">
              
                <!-- penilaian Batch Harta Baru -->
                  <a href="{{route('SenaraiHartaBaru.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <img class="h-48 w-48" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Senarai Harta -->
                  <a href="{{route('SenaraiHartaCukai.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/senarai harta.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Proses Bil Cukai -->
                  <a href="{{route('ProsesBilCukai.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/proses bil cukai.png') }}">
                      </div>
                    </div>
                  </a>

                   <!-- Senarai Akaun -->
                  <a href="{{route('SenaraiAkaun.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/senarai akaun.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Tempahan Gelanggang -->
                  <a href="{{route('TempahGelanggang.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/tempahan gelanggang.png') }}">
                      </div>
                    </div>
                  </a>


                  <!-- Senarai Tempahan -->
                  <a href="{{route('SenaraiTempahan.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full ">
                        <img class="h-48 w-48" src="{{ asset('img/icon/senarai tempahan.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Kutipan -->
                  <a href="{{route('SenaraiKutipan.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/kutipan.png') }}">
                      </div>
                    </div>
                  </a>

                  <!-- Bil Pelbagai -->
                  <a href="{{route('Bilpelbagai.index')}}" class="h-48 w-48 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                        <img class="h-48 w-48" src="{{ asset('img/icon/bil pelbagai.png') }}">
                      </div>
                    </div>
                  </a>


            </div>
        </div>
    </div>
</div>


@endsection
