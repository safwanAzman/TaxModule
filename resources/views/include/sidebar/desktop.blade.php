<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-gray-900 md:block flex-shrink-0">
    <div class="text-white">

        <div class="flex p-4">
            <div class="mr-2">
                <img class="hidden h-14 w-14 rounded-full sm:block object-cover mr-2 border-4 border-gray-100" src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="">
            </div>
            <div class="pt-1">
                <p class="font-bold text-base  text-gray-400"> ADMIN</p>
                <p class="text-sm text-gray-400 pt-2"><span style="height: 10px; width: 10px; background-color:#5fff14; border-radius: 50%; display: inline-block;"></span> Online</p>
            </div>
        </div>

        <ul class="mt-6">
            <x-sidebar.nav-item title="Halaman Utama" route="{{route('mainpage')}}">
                <x-heroicon-o-home class="w-5 h-5"/>
            </x-sidebar.nav-item>
        </ul>

        {{-- start penilaian --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open" title="Penilaian">
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('SenaraiHartaBaru.index')}}">Batch Harta Baru</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Senarai Batch Harta</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Penilaian Semula</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Selenggara Kod Jalan</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Pindaan Nilaian</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                <div class="flex">
                    <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                    <a class="w-full ml-2" href="#">Senarai Bantahan</a>
                </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Pembetulan Nilaian (Bantahan)</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Senarai Harta</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Lulus Pindah</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Lulus</a>
                    </div>
                </li>
            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end penilaian --}}
        
        {{-- start cukai --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open2" title="Cukai Taksiran">
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('SenaraiHartaCukai.index')}}">Senarai Harta</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('ProsesBilCukai.index')}}">Proses Bil Cukai</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Proses Notis Cukai</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Proses Waran Cukai</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Senarai Waran </a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Lulus Pindah Milik</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Batch Jernal</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Data File Peringatan</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Laporan</a>
                    </div>
                </li>

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#">Lulus</a>
                    </div>
                </li> 
            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end cukai --}}

        {{-- start Remisi  --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open3" title="Remisi">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Remisi --}}

        {{-- start Lesen --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open4" title="Lesen">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Lesen --}}

        {{-- start Sewa --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open5" title="Sewa">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Sewa --}}

        {{-- start Tempahan --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open6" title="Tempahan">

                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('TempahGelanggang.index')}}">Tempah Gelanggang</a>
                    </div>
                </li> 
                
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('SenaraiTempahan.index')}}">Senarai Tempahan</a>
                    </div>
                </li> 

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Tempahan --}}

        {{-- start Kompaun --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open7" title="Kompaun">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Kompaun --}}

        {{-- start Cagaran --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open8" title="Cagaran">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Cagaran --}}

        {{-- start Bil Pelbagai --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open9" title="Bil Pelbagai">

                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('Bilpelbagai.index')}}">Senarai Bil Pelbagai</a>
                    </div>
                </li>   

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Bil Pelbagai --}}

        {{-- start Kutipan --}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open10" title="Bil Pelbagai">
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('SenaraiKutipan.index')}}">Teller</a>
                    </div>
                </li> 
                
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('senaraiResit')}}" >Senarai Transaksi</a>
                    </div>
                </li>
                
                <li class="px-2 py-1 transition-colors duration-150 hover:text-white">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="{{route('Report.index')}}" >Report</a>
                    </div>
                </li>    
            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Kutipan --}}

        {{-- start Pemborong --}}
        {{-- <ul class="">
            <x-sidebar.dropdown-nav-item active="open11" title="Pemborong">

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li> 

            </x-sidebar.dropdown-nav-item>
        </ul> --}}
        {{-- end Pemborong --}}

        {{-- start Belanjawan --}}
         <ul class="">
            <x-sidebar.dropdown-nav-item active="open12" title="Belanjawan">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Belanjawan --}}


        {{-- start Perolehan--}}
        {{-- <ul class="">
            <x-sidebar.dropdown-nav-item active="open13" title="Perolehan">

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li> 

            </x-sidebar.dropdown-nav-item>
        </ul> --}}
        {{-- end Perolehan --}}

        {{-- start Laporan--}}
        {{-- <ul class="">
            <x-sidebar.dropdown-nav-item active="open14" title="Perolehan">

                <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li> 

            </x-sidebar.dropdown-nav-item>
        </ul> --}}
        {{-- end Laporan--}}


        {{-- start Lejar Am--}}
        <ul class="">
            <x-sidebar.dropdown-nav-item active="open15" title="Lejar Am">

                {{-- <li class="px-2 py-1 transition-colors duration-150">
                    <div class="flex">
                        <x-heroicon-o-desktop-computer class="w-5 h-5"/>
                        <a class="w-full ml-2" href="#"></a>
                    </div>
                </li>  --}}

            </x-sidebar.dropdown-nav-item>
        </ul>
        {{-- end Lejar Am--}}
        
    </div>
</aside>