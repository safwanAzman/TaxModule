@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" onclick="test()">
      <div class="flex items-center">
        <span>Senarai kutipan</span>
      </div>
    </a>

    <div class="grid grid-cols-12 gap-6" x-data="{ active: 0 }">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-3 xxl:col-span-3 lg:block">
            <div class="bg-white shadow-lg ">
                <x-tab.title name="0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>Cukai
                </x-tab.title>
                <x-tab.title name="1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>Lesen
                </x-tab.title>
                <x-tab.title name="2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>Sewa
                </x-tab.title>
                <x-tab.title name="3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>Pelbagai
                </x-tab.title>
                <x-tab.title name="4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>Cagaran
                </x-tab.title>
                <x-tab.title name="5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>Kompaun MDP
                    </x-tab.title>
                <x-tab.title name="6"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>Kompaun Suasa
                </x-tab.title>
                <x-tab.title name="7">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>Lot Kosong
                </x-tab.title>
                <x-tab.title name="8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>Waran
                </x-tab.title>
                <x-tab.title name="9">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>Tempahan
                </x-tab.title>
                <x-tab.title name="10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>Bil Air
                </x-tab.title>
                <x-tab.title name="11">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>Bil ElekTrik
                </x-tab.title>
                <x-tab.title name="12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>Bil Setempat PBT
                </x-tab.title>
                <x-tab.title name="13">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>Bil Cukai Tanah
                </x-tab.title>
                <x-tab.title name="14">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"  class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>Permit
                </x-tab.title>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-9">
             <div class="bg-white shadow-lg p-4">

                 <x-tab.content name="0">@include('pages.kutipan.cukai')</x-tab.content>



                    {{-- Start cheque details --}}
                    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <div class="pt-4">
                        <div x-data="{ isOpen1: false}">
                            <button class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400" @click="isOpen1 = !isOpen1">
                                <div class="text-base">Senarai Cek</div>
                                <svg x-show="!isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen1" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div class="mt-2 text-sm text-gray-700" x-show="isOpen1">
                                <div class="p-3">
                                    <x-form.basic-form action="">
                                        <x-slot name="content">
                                            <div class="grid gap-2 lg:grid-cols-1 sm:grid-cols-1">
                                            <x-form.dropdown label="Nama Bank" value="" default="yes">
                                                    <option value=""></option>
                                                </x-form.dropdown>
                                            </div>
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input  label="No Cek" value="" livewire=""/>
                                                <x-form.input  type="date" label="Tarikh Cek" value="" livewire=""/>
                                            </div>
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.dropdown label="Status" value="" default="yes">
                                                    <option value=""></option>
                                                </x-form.dropdown>
                                                <label class="pt-7">
                                                    <span class="text-sm font-semibold leading-5 text-gray-700 mr-2">
                                                        Bank Cas
                                                    </span>
                                                    <input class="mr-1 leading-tight" type="checkbox">             
                                                </label>                                       
                                            </div>
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input  label="Jumlah" value="" livewire=""/>
                                                <x-form.input  type="date" label="Tarikh TRX" value="" livewire=""/>
                                            </div>
                                        </x-slot>
                                    </x-form.basic-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End cheque details --}}

                {{-- Start Cash details --}}
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <div class="">
                        <div x-data="{ isOpen2: false}">
                            <button class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400" @click="isOpen2 = !isOpen2">
                                <div class="text-base">Senarai Tunai</div>
                                <svg x-show="!isOpen2" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen2" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div class="mt-2 text-sm text-gray-700" x-show="isOpen2">
                                <div class="p-3">
                                    <x-form.basic-form action="">
                                        <x-slot name="content">
                                            <div class="grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                                <x-form.dropdown label="Cash" value="" default="yes">
                                                    <option value="0">Cash (3800)</option>
                                                </x-form.dropdown> 
                                                <x-form.input label="Document Ref. No" value="" livewire=""/>
                                                <x-form.input label="Amount (RM)" value="" livewire=""/>
                                            </div>
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input  label="Transaction Description" value="" livewire=""/>
                                                <x-form.input  type="date" label="Transaction Date" value="" livewire=""/>
                                            </div>
                                        </x-slot>
                                    </x-form.basic-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End  Cash details --}}

                {{-- Start Payment --}}
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <div class="">
                        <div x-data="{ isOpen3: false}">
                            <button class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400" @click="isOpen3 = !isOpen3">
                                <div class="text-base">Bayaran</div>
                                <svg x-show="!isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                <svg x-show="isOpen3" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                            </button>

                            <div class="mt-2 text-sm text-gray-700" x-show="isOpen3">
                                <div class="p-3">
                                    <div class=" grid gap-2 lg:grid-cols-1 sm:grid-cols-1">
                                         <x-form.input label="Terimaan Semasa" value="0.00" livewire="" disabled/>
                                    </div>
                                    <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                        <x-form.input label="Baki Perlu Kutip" value="100.00" livewire="" disabled/>
                                        <x-form.input label="Baki Dipulangkan" value="0.00" livewire="" disabled/>
                                    </div>

                                     <div class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 180px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <span class="text-white text-sm flex items-center">Simpan Bayaran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Payment --}}

                <div class="mt-10 flex items-center justify-between p-2 text-sm font-semibold text-purple-100 bg-black rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex">
                        <div class="grid gap-20 lg:grid-cols-6 sm:grid-cols-6">
                            <p class="text-center">No Resit <br> <span class="text-center">1</span></p>
                            <p class="text-center">Tunai <br> <span class="text-center">0.00</span></p>
                            <p class="text-center">Cek <br> <span class="text-center">0.00</span></p>
                            <p class="text-center">MO/PO <br> <span class="text-center">0.00</span></p>
                            <p class="text-center">Kad Kredit <br> <span class="text-center">0.00</span></p>
                            <p class="text-center">Jumlah <br> <span class="text-center">0.00</span></p>
                        </div>
                    </div>
                </div> 
             </div>
        </div>
    </div>
 
</div>


@endsection