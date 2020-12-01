@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
      <div class="flex items-center">
        <span>Proses Bil Cukai</span>
      </div>
      <a  href="{{route('Cukai-Taksiran.index')}}" class="flex">
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
                    <div class=" mb-4 font-bold text-base pl-2">
                        <h1>Penggal Pertama-2018</h1>
                    </div>
                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Mukim</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>SILA PILIH</option>
                        <option value="">KUALA KUANTAN</option>
                        <option value="">ULU KUANTAN</option>
                        <option value="">SG.KARANG</option>
                        <option value="">BESERAH</option>
                        <option value="">ULU LEPAR</option>
                        <option value="">PENOR</option>
                    </x-form.dropdown>  
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">
                                    Bilangan Ditemui = <span class="font-semibold text-base"> 1</span> | Bilangan Dipapar = <span class="font-semibold text-base text-blue-500"> 0</span> 
                                </th>
                                <th class="px-4 py-3 flex justify-end">
                                    {{-- <a href="/CetakBilCukai" target="blank" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex">
                                        <span class="text-white">Cetak</span>
                                    </a> --}}
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <table class="w-full whitespace-no-wrap">
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            
                            <tr class="border bg-blue-100">
                                <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                                    <div class="flex text-2xl">
                                        <p class="font-semibold">1</p>
                                        <x-heroicon-o-clipboard-list class="w-8 h-8 ml-5 text-blue-500"/>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="text-base text-green-600 font-semibold uppercase">Kuala Kuantan</p>
                                    <p class="font-semibold">Bilangan Pegangan Aktif <span class="text-base text-blue-600 font-semibold">19</span></p>
                                    <p class="font-semibold">Jumlah Cukai Sepenggal <span class="text-base text-blue-600 font-semibold">$10,294.00</span></p>
                                    
                                </td>

                                <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                    <p class="font-semibold">Status Proses:</p>
                                    <p class="font-semibold">Tarikh Proses:</p>
                                    <p class="font-semibold">Diproses Oleh:</p>
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
                        <span>Maklumat Proses</span>
                    </div>
                </div>

                <div class="p-4">
                    <div class="pt-3">
                        <x-form.input label="Transaksi Setakat" value="02/02/2018" livewire=""/>
                        <x-form.input label="Tarikh Bil" value="01/01/2018" livewire=""/>
                        <x-form.input label="No Bil Akhir" value="4433" livewire=""/>
                        <label class="mt-1 md:w-2/3 block">
                            <span class=" text-sm font-semibold leading-5 text-gray-700">
                                Reset Nombor bil
                            </span>
                            <input class="mr-2 leading-tight" type="checkbox">
                            
                        </label>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg mt-4">
                <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <span>Proses Bil Cukai</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-base mb-2">Bil sedang diproses...</p>
                    <div class="shadow w-full bg-gray-100">
                        <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                    </div>
                    <div class="mt-3">
                        <label class="mt-3">
                            <input class="mr-2 leading-tight" type="checkbox">
                            <span class=" text-sm font-semibold leading-5 text-gray-700">
                                Jana semula bil yang sudah proses
                            </span>      
                        </label>
                    </div>
                    <div class="pt-4 flex">
                        <a href="{{route('cetakBilCukai')}}" target="blank" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 200px;">
                            <x-heroicon-o-cog class="w-6 h-6 text-white mr-2"/>
                            <span class="text-white text-sm flex items-center">Jana Bil Cukai</span>
                        </a>
                        <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 200px;">
                            <x-heroicon-o-cog class="w-6 h-6 text-white mr-2"/>
                            <span class="text-white text-sm flex items-center">Pos Transaksi Bil</span>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                            <x-form.input label="" value="21:27:35" livewire=""/>
                            <x-form.input label="" value="" livewire=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection