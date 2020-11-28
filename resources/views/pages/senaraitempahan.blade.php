@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
      <div class="flex items-center">
        <span>Senarai Tempahan</span>
      </div>
        <a  href="{{route('Tempahan.index')}}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white mr-2 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>
 <div class="grid grid-cols-12 gap-6">
    <div class="flex flex-col-reverse col-span-12 lg:col-span-8 xxl:col-span-8 lg:block">
        <div class="flex justify-between">
        <div class="flex items-center">
                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Pilihan</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>SEKSYEN 7</option>
                    </x-form.dropdown> 
                    <div class="ml-2">
                        <x-form.dropdown label="" value="" default="yes">
                            <option value=""selected>DEWAN MELATI</option>
                        </x-form.dropdown>
                    </div>

                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Kriteria</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Nama</option>
                    </x-form.dropdown> 
                    <div class="ml-2">
                     <x-form.input label="" value="Faris" livewire=""/>
                    </div>
            </div>   
        </div>
    <!-- With avatar -->
    <div class="py-4">
        <h1 class="bg-blue-400 p-2 mb-2 font-semibold text-white">Bilangan Tempahan Ditemui = 1</h1>
    </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs mt-2">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                <thead >
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3">NO BIL</th>
                    <th class="px-4 py-3">NAMA PELANGAN</th>
                    <th class="px-4 py-3">STATUS</th>
                    <th class="px-4 py-3">SEKSYEN</th>
                    <th class="px-4 py-3">ID KAWASAN</th>
                    <th class="px-4 py-3">NO RESIT</th>
                    </tr>
                </thead>
                 <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                     <tr class="border bg-blue-100">
                         <td class="px-4 py-3">
                             <div class="flex">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-green-500 font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                                <p class="font-semibold text-sm">1</p>
                                
                            </div>
                         </td>
                         <td class="px-4 py-3 text-sm">
                             <p>T20141100523</p>
                        </td>
                        <td class="px-4 py-3 text-sm">
                             <p class="font-semibold text-sm">MUHAMMAD FARIS </p>
                             <p class="text-sm">890112036081</p>
                        </td>
                        <td class="px-4 py-3 text-sm">
                             <p class="text-sm">BAYAR</p>
                        </td>
                        <td class="px-4 py-3 text-sm">
                             <p class="text-sm">007</p>
                        </td>
                        <td class="px-4 py-3 text-sm">
                             <p class="text-sm">DB007A</p>
                        </td>
                        <td class="px-4 py-3 text-sm">
                             <p class="text-sm">424408</p>
                        </td>
                     </tr>
                 </tbody>
                </table>
                <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3">Butiran Tempahan</th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                    <tr class="">
                        <td class="px-4 py-3 text-sm"></td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">DEWAN MELATI (7A)</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">GELANGGANG 1</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">02/12/2014</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">7:00PM</p>   
                        </td>
                        <td class="px-4 py-3 text-sm" style=" border-bottom: 1px solid #ddd;">
                            <p class="font-semibold">9:00PM</p>   
                        </td>
                    </tr> 
                                       
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
        <div class="bg-white shadow-lg">
          <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <span>Maklumat Tempahan</span>
            </div>
            <div class="text-gray-600"></div>
            </a>

            <div class="p-4">
               
                <div class="pt-3">
                    <h1 class="bg-blue-400 p-2 mb-2 font-semibold text-white">Tempahan</h1>
                    <p class="font-semibold">Tarikh Tempah: &nbsp;&nbsp;<span class="text-blue-600">25/11/2014</span></p>
                    <p class="font-semibold">No Bil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-600">T20141100253</span></p>
                    <p class="font-semibold">Amaun Bil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-600">RM 112.00</span></p>
                    <p class="font-semibold">Amount GST: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-600 ">RM 0.00</span></p>
                    <p class="font-semibold">Penggenapan: &nbsp;&nbsp;&nbsp; <span class="text-blue-600 ">RM 0.00</span></p>
                    <p class="font-semibold">Jumlah Amaun: &nbsp;&nbsp;<span class="text-blue-600">RM 112.00</span></p>
                    <p class="font-semibold">Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text-green-600">BAYAR</span></p>

                    <h1 class="bg-blue-400 p-2 mt-2 font-semibold text-white">Bayaran</h1>

                    <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2 mt-4">
                        <x-form.input label="No.Bil Lama" value="" livewire=""/>
                        <x-form.input label="Amaun Bayaran" value="122.00" livewire=""/>
                        <x-form.input label="Tarikh Bayaran" value="25/11/2014" livewire=""/>
                        <x-form.input label="No.Resit" value="424408" livewire=""/>
                        <x-form.input label="No.Mesin" value="14" livewire=""/>
                        <x-form.input label="ID Cagaran" value="" livewire=""/>
                    </div>
                    <div class=" grid gap-2 lg:grid-cols-1 sm:grid-cols-1">
                        <label class="block text-sm font-semibold leading-5 text-gray-700">Catatan</label>
                        <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline h-24"></textarea>
                    </div>
                   <div class="flex mt-2">
                       <button class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex">
                            <span class="text-white text-sm">Kemaskini</span>
                        </button>
                        <button class="bg-blue-600 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-1">
                            <span class="text-white text-sm">Papar Bil</span>
                        </button>
                        <button class="bg-blue-600 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex  ml-1">
                            <span class="text-white text-sm">Surat Tawaran</span>
                        </button>
                   </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>

@stop