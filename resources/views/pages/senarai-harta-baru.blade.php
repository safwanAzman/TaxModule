@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" onclick="test()">
      <div class="flex items-center">
        <span>Senarai Harta baru (No.Batch:2018000001)</span>
      </div>
    </a>
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
    <!-- With avatar -->
    <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
        <div class="mb-5 font-bold text-base pl-2">
            <h1>KUANTAN -KG.PASIR EMAS</h1>
        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                <thead >
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Bilangan Ditemui = <span class="font-semibold text-base"> 13</span> | Bilangan Dipapar = <span class="font-semibold text-base text-blue-500"> 0</span> </th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                </table>
                <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="">
                    <th class=""></th>
                    <th class=""></th>
                    <th class=""></th>
                    <th class=""></th>
                   
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">1</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 1KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00001</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                     <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">2</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 2KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00002</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">3</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">AARON AZIZ SDN BHD (ORG00141)</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 3KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00003</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">4</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 4KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00004</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">5</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 5KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00005</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">6</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 6KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00006</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                      <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">7</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 7KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00007</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                      <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">8</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 8KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00008</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                      <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">9</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 9KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00009</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                      <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">10</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 10KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000010</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">11</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 11KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000011</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                     <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">12</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 12KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000012</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>

                     <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold font-semibold ">13</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">...</p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 13KG.PASIR EMAS</span></p>
                                
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/000013</span></p>
                                <p class="font-semibold">Dikemaskini Oleh:</p>
                            </td>

                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </td>
                    </tr>


                    
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
        {{-- <div class="bg-white shadow-lg">
          <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <span>Salin Maklumat</span>
            </div>
            <div class="text-gray-600"></div>
            </a>
            
        </div> --}}

        <div class="bg-white shadow-lg mt-4">
          <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <span>Proses Pos Akaun</span>
            </div>
              <div class="text-gray-600"></div>
            </a>
            <div class="p-4">
                <p class="text-base">Sedia untuk dipos ke akaun cukai...</p>
  
                <div class="pt-3">
                    <x-form.input label="Id Pengguna Semak" value="" livewire=""/>
                    <x-form.input type="password" label="Kata Laluan" value="" livewire=""/>
                    
                    <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 205px;" onclick="posBtn()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                        </svg>
                        <span class="text-white text-sm flex items-center">Pos Ke Akaun Cukai</span>
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg mt-4">
          <div class="p-4">
            <div class="flex">
                <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 180px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <span class="text-white text-sm flex items-center">Tambah Harta</span>
                </a>
                <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 180px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
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
              <div class="text-gray-600"></div>
            </a>
             <div class="p-4">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-white text-sm flex items-center">Jana Notis</span>
                    </a>
                    <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" style="width: 180px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        <span class="text-white text-sm flex items-center">Cetak Notis</span>
                     </a>
                </div>
                    
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