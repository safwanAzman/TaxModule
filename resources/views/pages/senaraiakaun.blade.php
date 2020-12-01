@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
      <div class="flex items-center">
        <span>Senarai Akaun</span>
      </div>
      <a  href="{{route('Sewa.index')}}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white mr-2 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-8 xxl:col-span-8 lg:block">
            <div class="flex items-center">
                <x-form.dropdown label="" value="" default="yes">
                    <option value=""selected>SEKSYEN 6</option>
                </x-form.dropdown> 
                <div class="ml-2">
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Semua Lokasi</option>
                    </x-form.dropdown>
                </div>
                <div class="ml-2">
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Semua Aset</option>
                    </x-form.dropdown>
                </div> 
                <div class="ml-2">
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Aktif</option>
                    </x-form.dropdown> 
                </div>     
            </div>
            <div class="flex items-center">
                <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Kriteria</span>
                <x-form.dropdown label="" value="" default="yes">
                    <option value=""selected>No Akaun baru</option>
                </x-form.dropdown> 
                
                <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Cari</span>
                <x-form.input label="" value="" livewire=""/>

                <a href="#" class="-mt-3 bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 160px;">
                    <x-heroicon-o-printer class="w-6 h-6 text-white mr-2"/>
                    <span class="text-white text-sm flex items-center">Cetak Senarai</span>
                </a>
            </div>      
            
            <div class="py-4">
                <h1 class="bg-blue-400 p-2 mb-2 font-semibold text-white">Bilangan Ditemui = 1</h1>
            </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs mt-2">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-green-100 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">
                                    KIOSK PONDOK BAS JALAN 6/1 SEKSYEN 6
                                </th>
                                <th class="px-4 py-3 flex justify-end">
                                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen = true" >
                                        <span class="text-white">Edit</span>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            
                            <tr class="bg-green-100">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Lot</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Akaun Penyewa (No Akaun Lama)/</p>
                                    <p class="font-semibold">Nama Penyewa</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">Status Penyewa / Kod Hasil</p>
                                    <p class="font-semibold">Harga Sewa / Tunggakan</p>       
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">Tarikh Mula/</p>
                                    <p class="font-semibold">Tarikh Tamat</p>   
                                </td>
                            </tr> 
                            <tr class="">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">0</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">S006000216</p>
                                    <p class="font-semibold">YANTIE RAHMAN</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold"><span class="text-green-600">Aktif</span> / 74108</p>
                                    <p class="font-semibold">30.00 / BLN <span class="text-red-600">(10.00)</span></p>  
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <div class="bg-red-200 p-4">
                                        <p class="font-semibold">01/02/2012</p>
                                        <p class="font-bold">31/01/2013</p>
                                    </div>   
                                </td>
                            </tr> 
                            <tr class="">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">0</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">S006000214</p>
                                    <p class="font-semibold">NOAKAUNLAMA</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold"><span class="text-green-600">Aktif</span> / 74108</p>
                                    <p class="font-semibold">35.00 / BLN <span class="text-red-600">(45.00)</span></p>  
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <div class="bg-red-200 p-4">
                                        <p class="font-semibold">01/02/2011</p>
                                        <p class="font-bold">31/01/2012</p>
                                    </div>   
                                </td>
                            </tr>                                                              
                        </tbody>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-green-100 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">
                                    KIOSK JALAN 6/1 SEKSYEN 6
                                </th>                       
                                <th class="px-4 py-3 flex justify-end">
                                    <div>
                                        @include('pages.maklumatakaunsewa')
                                    </div> 
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            
                            <tr class="bg-green-100">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Lot</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Akaun Penyewa (No Akaun Lama)/</p>
                                    <p class="font-semibold">Nama Penyewa</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">Status Penyewa / Kod Hasil</p>
                                    <p class="font-semibold">Harga Sewa / Tunggakan</p>       
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">Tarikh Mula/</p>
                                    <p class="font-semibold">Tarikh Tamat</p>   
                                </td>
                            </tr> 

                            <tr class="">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">GERAI B10</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">S006000217</p>
                                    <p class="font-semibold">SHAFIQUE YUSOFF</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold"><span class="text-green-600">Aktif</span> / 74106</p>
                                    <p class="font-semibold">70.00 / BLN <span class="text-red-600">(219.00)</span></p>  
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <div class="bg-red-200 p-4">
                                        <p class="font-semibold">01/02/2012</p>
                                        <p class="font-bold">31/01/2013</p>
                                    </div>   
                                </td>
                            </tr> 

                            <tr class="bg-blue-200 cursor-pointer">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">GERAI B11</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">S006000218</p>
                                    <p class="font-semibold">MEXI SERTI SDN BHD</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold"><span class="text-green-600">Aktif</span> / 74106</p>
                                    <p class="font-semibold">70.00 / BLN <span class="text-red-600">(0.00)</span></p>  
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">01/07/2017</p>
                                    <p class="font-bold">30/06/2018</p>
                                </td>
                            </tr> 

                            <tr class="">
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">GERAI B12</p>   
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">S006000219</p>
                                    <p class="font-semibold">SHAFIQUE YUSOFF</p>      
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold"><span class="text-green-600">Aktif</span> / 74106</p>
                                    <p class="font-semibold">70.00 / BLN <span class="text-red-600">(0.00)</span></p>  
                                </td>
                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">01/07/2017</p>
                                    <p class="font-bold">30/06/2018</p>
                                </td>
                            </tr>                                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 xxl:col-span-4">

            <div class="bg-white shadow-lg">
                <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Maklumat Aset</span>
                    </div>
                </div>

                <div class="p-4">
                    <div class="">
                        <p class="font-semibold">PASAR JALAN 6/1 SEKSYEN 6</p>
                        <p class="font-semibold">Alamat 1: <span class="text-blue-600">JALAN 6/1</span></p>
                        <p class="font-semibold">No.Lot: <span class="text-blue-600">GERAI B11</span></p>
                        <p class="font-semibold">Harga Sewa: <span class="text-blue-600">RM70.00</span></p>
        
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg mt-3">
                <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Maklumat Penyewa</span>
                    </div>
                </div>

                <div class="p-4">
                    <div class="">
                        <p class="font-semibold">Status Akaun: <span class="text-blue-600">Aktif</span></p>
                        <p class="font-semibold">Id Permohon: <span class="text-blue-600">2017000001</span></p>
                        <p class="font-semibold">No Akaun: <span class="text-blue-600">S006000218</span></p>
                        <p class="font-semibold">Jenis Pelanggan: <span class="text-blue-600">Pelanggan Syarikat</span></p>
                        <p class="font-semibold">Nama: <span class="text-blue-600">MEXI SERTI SDN BHD</span></p>
                        <p class="font-semibold">Harga Sewa Bulanan: <span class="text-blue-600">RM70.00</span></p>
                        <p class="font-semibold">Jumlah Tunggakan: <span class="text-red-600">RM0.00</span></p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg mt-3">            
                <div class="p-4">
                    <div class="">
                        <p class="font-bold text-base text-red-600">ADA AKAUN TERTUNGGAK. PELANGGAN DISEKAT</p>
                        <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer mt-2" style="width: 230px;">
                            <x-heroicon-o-printer class="w-6 h-6 text-white mr-2"/>
                            <span class="text-white text-sm flex items-center">Cetak Senarai Sekatan</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection