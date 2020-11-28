@extends('default.default')
@section('content')

<div class="py-20 flex items-center justify-center">
    <div class="grid grid-cols-12 gap-1">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="#" onclick="test()">
              <div class="flex items-center">
                <span>Kompaun</span>
              </div>
            </div>
            <div class="grid gap-20 lg:grid-cols-6 sm:grid-cols-6">
              
                <!-- penilaian Batch Harta Baru -->
                  <a href="{{route('SenaraiHartaBaru.index')}}" class="h-32 w-32 relative cursor-pointer mb-5">
                    <div class="absolute inset-0 transform  hover:scale-125 transition duration-300">
                      <div class="h-full w-full">
                         <img class="h-32 w-32" src="{{ asset('img/icon/batch harta baru.png') }}">
                      </div>
                    </div>
                  </a>


            </div>
        </div>
    </div>
</div>


@endsection
