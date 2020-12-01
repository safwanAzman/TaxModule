@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
      <div class="flex items-center">
        <span>Senarai Harta baru (No.Batch:2018000001)</span>
      </div>
        <a  href="{{route('Penilaian.index')}}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white mr-2 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>

    <div class="grid grid-cols-12 gap-6">

        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Status</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Semua Status</option>
                        <option value="">Tidak Aktif</option>
                    </x-form.dropdown>

                    <span class="ml-3 mr-2 -mt-4 text-base text-gray-500">Kriteria</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Semua</option>
                    </x-form.dropdown>  
                </div>
                <div class="flex justify-end">
                    <span class="ml-3 mr-2 mt-3 text-base text-gray-500">Carian</span>
                    <x-form.input label="" value="" livewire=""/> 
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
            <div class="mb-5 font-bold text-base pl-2">
                <h1>KUANTAN -KG.PASIR EMAS</h1>
            </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">
                                    Bilangan Ditemui = <span class="font-semibold text-base"> 13</span> | Bilangan Dipapar = <span class="font-semibold text-base text-blue-500"> 0</span> 
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            
                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">1</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">AZURA BINTI JAAFAR.</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 1KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00001</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/> 
                                </td>

                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">2</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">KASWADI BIN MOHD KASSIM</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 2KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00002</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/> 
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">3</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">FOONG MOOI ENG (ORG00141)</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 3KG.PASIR EMAS</span></p> 
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00003</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>  
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">4</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">NORREHA BINTI ISMAIL</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 4KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00004</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>  
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">5</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">SANI A/L BAH DEGIL</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 5KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00005</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>  
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">6</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">AINOR BINTI DRIS</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 6KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00006</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/> 
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">7</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">NAFAZILA BIN MAD SAHAR</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 7KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00007</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/> 
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">8</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">BONG SIN KIONG</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 8KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00008</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/> 
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">9</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">NOR RIZAM  BINTI YUSOF</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 9KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00009</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">10</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>      
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">AB. SOFI BIN MUSTAPA</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 10KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000010</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">11</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>  
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">ROSNAH BINTI PUTEH</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 11KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000011</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">12</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">SHAM FAIZAL JAAFAR</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 12KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000012</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>
                                </td>
                            </tr>

                            <tr class="border">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold ">13</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">SULAIMAN  JASEH</p>
                                    <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 13KG.PASIR EMAS</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000013</span></p>
                                    <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <x-heroicon-o-x-circle class="w-8 h-8 text-red-500"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
            <div class="bg-white shadow-lg mt-4">
                <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Proses Pos Akaun</span>
                    </div>
                </a>
                <div class="p-4">
                    <p class="text-base">Sedia untuk dipos ke akaun cukai...</p>
                    <div class="pt-3">
                        <x-form.basic-form action="">
                            <x-slot name="content">

                                <x-form.input label="Id Pengguna Semak" value="" livewire=""/>
                                
                                <x-form.input type="password" label="Kata Laluan" value="" livewire=""/>
                                
                                <button  class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 205px;" onclick="posBtn()">
                                    <x-heroicon-o-inbox-in class="w-6 h-6 text-white mr-2"/>
                                    <span class="text-white text-sm flex items-center">Pos Ke Akaun Cukai</span>
                                </button>

                            </x-slot>
                        </x-form.basic-form>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg mt-4">
            <div class="p-4">
                <div class="flex">
                    @include("pages.tambahhartamodal")

                    <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 180px;">
                        <x-heroicon-o-printer class="w-6 h-6 text-white mr-2"/>
                        <span class="text-white text-sm flex items-center">Cetak Senarai</span>
                    </a> 
                </div>
            </div>
                
            </div>

            <div class="bg-white shadow-lg mt-4">
                <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Janaan Notis</span>
                    </div>
                </a>
                <div class="p-4">
                    <x-form.basic-form action="">
                        <x-slot name="content">

                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                <x-form.input label="Tarikh Semakan" value="" livewire=""/>
                                <x-form.input label="Tarikh Kuat Kuasa/Nilaian" value="" livewire=""/>
                                <x-form.input label="Tarikh Notis" value="" livewire=""/>
                                <x-form.input label="Tarikh Bantahan" value="" livewire=""/>
                            </div>

                            <div class=" grid gap-2 lg:grid-cols-1 sm:grid-cols-1">
                                <x-form.input label="Tarikh Janaan Notis" value="" livewire=""/>
                                <label class="block text-sm font-semibold leading-5 text-gray-700">Catatan</label>
                                <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline h-32"></textarea>
                            </div>

                            <div class="pt-4 flex">
                                <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 205px;">
                                    <x-heroicon-o-cog class="w-6 h-6 text-white mr-2"/>
                                    <span class="text-white text-sm flex items-center">Jana Notis</span>
                                </a>
                                <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 180px;">
                                    <x-heroicon-o-printer class="w-6 h-6 text-white mr-2"/>
                                    <span class="text-white text-sm flex items-center">Cetak Notis</span>
                                </a>
                            </div>
                        </x-slot>
                    </x-form.basic-form>            
                </div>

            </div>
        </div>
    </div>
</div>

<script>
  function posBtn() {
       Swal.fire('Telah Berjaya Pos Akaun Cukai', '', 'success')
  }
</script>

@stop