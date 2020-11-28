@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" onclick="test()">
      <div class="flex items-center">
        <span>Bil Pelbagai</span>
      </div>
    </a>
 <div class="grid grid-cols-12 gap-6">
    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
       <div class="flex justify-between">
        <div class="flex items-center">
                    <span class="ml-3 mr-2 -mt-4 text-base text-gray-500">Kriteria</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Id Pelanggan</option>
                    </x-form.dropdown>  
            </div>
                <div class="flex justify-end">
                    <span class="ml-3 mr-2 mt-3 text-base text-gray-500">Carian</span>
                    <x-form.input label="" value="701219115166" livewire=""/> 
            </div>
        </div>
    </div>
    <!-- With avatar -->
    <div class="col-span-12 lg:col-span-3 xxl:col-span-3">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full bg-white shadow-lg p-4">
                <table class="w-full whitespace-no-wrap">
                <thead >
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Bilangan Pemilik Ditemui = <span class="font-semibold text-base"> 1</span> </th>
                    </tr>
                </thead>
                </table>
                <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="">
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <tr class="border bg-blue-100">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <p class="font-semibold">Nama</p>
                            <p class="font-semibold">Alamat</p>
                        </td>
                    </tr>
                    <tr class="border bg-white">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <p class="font-semibold text-xs">FATIHA ALMIRAS <span class="text-red-600">(701219115166)</span></p>
                            <p class="font-semibold text-xs">No 8 JALAN MEWAH 28600 TAMAN <br>MEWAH</p>
                        </td>
                    </tr>                        
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-9 xxl:col-span-9">
        <div class="" x-data="{ active: 1 }">
            <div class="flex bg-white shadow-lg mb-10">
                <x-tab.title name="0">Bil Baru</x-tab.title>
                <x-tab.title name="1">Senarai Bil</x-tab.title>
                <x-tab.title name="2">Maklumat Pemilik</x-tab.title>
        </div>
        </div>    
         <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
             <div class="bg-white shadow-lg">
                <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Maklumat Pemilik</span>
                    </div>
                    <div class="text-gray-600"></div>
                </div>
                <div class="bg-white p-4 leading-8">
                    <p class="font-semibold text-sm text-gray-500">
                        Nama: &nbsp;&nbsp;&nbsp;&nbsp;<span>FATIHA ALMIRAS</span>
                    </p>
                    <p class="font-semibold text-sm  text-gray-500">
                        Alamat: &nbsp;&nbsp;<span>No 8 JALAN MEWAH 28600 TAMAN MEWAH</span>
                    </p>
                </div>
                <div>
                    <table class="w-full whitespace-no-wrap">
                    <thead >
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Bilangan Pemilik Ditemui = <span class="font-semibold text-base"> 4</span> </th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-green-100 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No Akaun</th>
                            <th class="px-4 py-3">No Bil</th>
                            <th class="px-4 py-3">Tarikh Bil</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        
                        <tr class="border">
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2018000001</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2018000001</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">03/02/2018</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B</p>
                            </td>
                        </tr>
                         <tr class="border">
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2017000003</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2017000003</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">29/10/2017</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B</p>
                            </td>
                        </tr>
                        <tr class="border">
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2017000002</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2017000002</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">29/10/2017</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B</p>
                            </td>
                        </tr>
                        <tr class="border">
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2016000002</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">B2016000002</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">12/12/2016</p>
                            </td>
                            <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                <p class="font-semibold text-xs">R</p>
                            </td>
                        </tr>
                                          
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white shadow-lg">
                <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Maklumat Bil Pelbagai</span>
                    </div>
                </div>
                <div class="border-2 border-blue-500 mt-4 p-4">
                     <div class="">
                        <div class=" grid gap-2 lg:grid-cols-4 sm:grid-cols-4">
                            <p class="font-semibold text-sm">No Bil:</p>
                            <p class="text-sm">B2018000001</p>

                            <p class="font-semibold text-sm">Status:</p>
                            <p class="text-sm">B</p>

                            <p class="font-semibold text-sm">Amaun Resit:</p>
                            <p class="text-sm">0.00</p>

                            <p class="font-semibold text-sm">Tarikh Resit:</p>
                            <p class="text-sm"></p>

                            <p class="font-semibold text-sm">No.Resit:</p>
                            <p class="text-sm">-</p>

                            <p class="font-semibold text-sm">Penyedia Bil</p>
                            <p class="text-sm">Kamil Bahari Harun</p>
                        </div>
                        
                    </div>
                </div>
                <div class="border-dashed border-b-2 border-gray-700 mt-4 p-4">
                     <div class="">
                        <div class=" grid gap-2 lg:grid-cols-4 sm:grid-cols-4">
                            <p class="font-semibold text-sm">Kod Hasil:</p>
                            <p class="text-sm">72303</p>

                            <p class="font-semibold text-sm">Amaun:</p>
                            <p class="text-sm">100</p>

                            <p class="font-semibold text-sm">Tarikh Mula:</p>
                            <p class="text-sm">01/02/2018</p>

                            <p class="font-semibold text-sm">Tarikh Akhir:</p>
                            <p class="text-sm">28/02/2018</p>
                            
                            <p class="font-semibold text-sm">No.Tender:</p>
                            <p class="text-sm"></p>

                            <p class="font-semibold text-sm">Keterangan</p>
                            <p class="text-sm">BAYARAN KURSUS</p>
                          

                        </div>                  
                    </div>
                </div>
                <div class="border-dashed border-b-2 border-gray-700 mt-4 p-4">
                     <div class="">
                        <div class=" grid gap-2 lg:grid-cols-4 sm:grid-cols-4">
                            <p class="font-semibold text-sm">Kod Hasil:</p>
                            <p class="text-sm">81106</p>

                            <p class="font-semibold text-sm">Amaun:</p>
                            <p class="text-sm">6</p>

                            <p class="font-semibold text-sm">Tarikh Mula:</p>
                            <p class="text-sm"></p>

                            <p class="font-semibold text-sm">Tarikh Akhir:</p>
                            <p class="text-sm"></p>
                            
                            <p class="font-semibold text-sm">No.Tender:</p>
                            <p class="text-sm"></p>

                            <p class="font-semibold text-sm">Keterangan</p>
                            <p class="text-sm">GST @ 6% (SR)</p>
                          

                        </div>                  
                    </div>
                </div>
                <div class="flex mt-4 p-4">
                   <a href="/DownloadResitBil" target="blank" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        <span class="text-white text-sm flex items-center">Cetak</span>
                     </a>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection