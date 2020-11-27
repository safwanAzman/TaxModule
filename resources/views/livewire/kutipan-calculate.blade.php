<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3"  x-data="{ active: 15 }">
    <div class="grid grid-cols-12 gap-1">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="bg-white shadow-lg p-4">
                <div class="flex justify-between">
                    <x-tab.title name="0" livewire="wire:click=chooseCategory('C0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Cukai</span>
                    </x-tab.title>
                    <x-tab.title name="1" livewire="wire:click=chooseCategory('L0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Lesen</span>
                    </x-tab.title>
                    <x-tab.title name="2" livewire="wire:click=chooseCategory('S0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Sewa</span>
                    </x-tab.title>
            
                    <x-tab.title name="3" livewire="wire:click=chooseCategory('P0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Pelbagai</span>
                    </x-tab.title>
                    <x-tab.title name="4" livewire="wire:click=chooseCategory('CA')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Cagaran</span>
                    </x-tab.title>
                    <x-tab.title name="5" livewire="wire:click=chooseCategory('KM')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Kompaun MDP</span>
                    </x-tab.title>
                    <x-tab.title name="6" livewire="wire:click=chooseCategory('KS')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Kompaun Suasa</span>
                    </x-tab.title>
                    <x-tab.title name="7" livewire="wire:click=chooseCategory('LK')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Lot Kosong</span>
                    </x-tab.title>
                    <x-tab.title name="8" livewire="wire:click=chooseCategory('W0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Waran</span>
                    </x-tab.title>
                    <x-tab.title name="9" livewire="wire:click=chooseCategory('T0')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Tempahan</span>
                    </x-tab.title>
                    <x-tab.title name="10" livewire="wire:click=chooseCategory('BA')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Air</span>
                    </x-tab.title>
                    <x-tab.title name="11" livewire="wire:click=chooseCategory('BE')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Elektrik</span>
                    </x-tab.title>
                    <x-tab.title name="12" livewire="wire:click=chooseCategory('BS')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Setempat PBT</span>
                    </x-tab.title>
                    <x-tab.title name="13" livewire="wire:click=chooseCategory('BC')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Cukai Tanah</span>
                    </x-tab.title>
                    <x-tab.title name="14" livewire="wire:click=chooseCategory('P1')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"  class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg><span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Permit</span>
                    </x-tab.title>
                </div>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-12 gap-1">
        {{-- start search rujukan --}}
        <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">   
            <div class="">
                <div class="bg-white shadow-lg p-2 mt-5">
                    <div class="my-4 flex justify-between">
                        <div class="flex items-center w-full">
                            <div class="flex">
                                <span class="mr-2 mt-2 text-base text-gray-500">No.Rujukan </span>
                                <x-form.input livewire="wire:model=search" type="text" label="" value=""/>
                                <a href="#" class="mt-3 ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-500 hover:text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                        
                    </div> 
                    <div class="pt-2">
                        <x-general.table>
                            <x-slot name="thead">
                                <x-general.table-header class="text-left" value="Urusniaga" sort="" livewire=""/>
                                <x-general.table-header class="text-left" value="No.Rujukan" sort="" livewire=""/>
                                <x-general.table-header class="text-left" value="Jumlah Bil" sort="" livewire=""/>
                                <x-general.table-header class="text-left" value="Amaun Bayar" sort="" livewire=""/>
                                <x-general.table-header class="text-center" value="Tindakan" sort="" livewire=""/>  
                            </x-slot>
                            <x-slot name="tbody">
                                @forelse ($invoice_search as $item1)
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ $item1->business_type }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ $item1->bil_no }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ number_format($item1->total_bil_amount, 2) }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ number_format($item1->total_paid_amount, 2) }}</p>
                                    </x-general.table-body> 

                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <div class="flex justify-center">
                                            <div class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer" wire:click="showInvoice({{$item1->id}})">
                                                <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>

                                            <div class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer ml-2" wire:click="addInvoice({{$item1->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                </svg>
                                            </div>
                                        </div>
                                    </x-general.table-body> 
                                </tr> 
                                @empty @endforelse

                                @forelse ($invoice_process as $item2)
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ $item2->business_type }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ $item2->bil_no }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ number_format($item2->total_bil_amount, 2) }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>{{ number_format($item2->total_paid_amount, 2) }}</p>
                                    </x-general.table-body> 

                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <div class="flex justify-center">
                                            <div class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer" wire:click="showInvoice({{$item2->id}})">
                                                <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>

                                            <div class="bg-red-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer ml-2" wire:click="deleteInvoice({{$item2->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div>
                                    </x-general.table-body> 
                                </tr> 
                                @empty @endforelse
                                
                                
                                <tr class="bg-orange-100">
                                    <x-general.table-body colspan="3" class="text-sm text-gray-500 uppercase">
                                        
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-gray-500 uppercase">
                                        <p class="font-semibold text-xs">Bilangan Bil: <span class="font-semibold">{{ $invoice_process->count() }}</span></p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p class="font-semibold text-xs">Jumlah Perlu Bayar: <span class="font-semibold">RM {{ number_format($invoice_process->sum('total_paid_amount'), 2) }}</span></p>
                                    </x-general.table-body>        
                                </tr>                       
                            </x-slot>

                            {{-- {{ $list->links('pagination::tailwind') }} --}}
                        </x-general.table>
                    </div>  
                </div>
            </div>
        </div>
        {{-- End search rujukan --}}

        <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
            @if(isset($invoice_show))
            {{--Start View Maklumat --}}
            <div class="bg-white shadow-lg mt-5 p-4">
                <div class="pt-4">
                    <h1 class="text-blue-500 font-semibold text-xl">Maklumat {{ $invoice_show->business_type }}</h1>
                    <div class="pt-2 leading-7">
                        <p>No Rujukan : <span class="font-semibold">{{ $invoice_show->bil_no }}</span></p>
                        <p>Nama : <span class="font-semibold">{{ $invoice_show->customer_name }}</span></p>
                        <p>IC : <span class="font-semibold">{{ $invoice_show->customer_ic }}</span></p>
                        <p>Alamat : <span class="font-semibold">{{ isset($invoice_show->customer_address1) ? $invoice_show->customer_address1.',' : '' }} {{ isset($invoice_show->customer_address2) ? $invoice_show->customer_address2.',' : '' }} {{ isset($invoice_show->customer_address3) ? $invoice_show->customer_address3.',' : '' }} {{ isset($invoice_show->customer_postcode) ? $invoice_show->customer_postcode : '' }} {{ isset($invoice_show->customer_town) ? $invoice_show->customer_town.',' : '' }} {{ isset($invoice_show->customer_state) ? $invoice_show->customer_state : '' }}
                        </span></p>
                    </div>
                </div>
                <div class="pt-4">
                    <x-general.table>
                        <x-slot name="thead">
                            <x-general.table-header class="text-left" value="Kod Hasil" sort="" livewire=""/>
                            <x-general.table-header class="text-left" value="Status Kompaun" sort="" livewire=""/>
                            <x-general.table-header class="text-left" value="No.Plat" sort="" livewire=""/>
                            <x-general.table-header class="text-left" value="Amaun (RM)" sort="" livewire=""/> 
                        </x-slot>
                        <x-slot name="tbody">
                            @forelse ($invoice_show->detail as $item3)
                            <tr>
                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                    <p>{{ $item3->hasil_code }}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                    <p>{{ $item3->compound_status }}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                    <p>{{ $item3->plate_no }}</p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                    <p>{{ number_format($item3->amount, 2) }}</p>
                                </x-general.table-body> 
                            </tr> 
                            @empty @endforelse
                            <tr class="bg-orange-100">
                            <x-general.table-body colspan="3" class="text-sm text-gray-500 uppercase"></x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                    <p class="font-semibold">Jumlah (RM) {{ number_format($invoice_show->total_paid_amount, 2) }}</p>
                                </x-general.table-body> 
                            </tr> 
                            

                        </x-slot>

                        {{-- {{ $list->links('pagination::tailwind') }} --}}
                    </x-general.table>
                </div>
            </div>
            {{--End View Maklumat --}}
            @endif

            {{-- Start Mod Bayaran --}}
            <div class="bg-white shadow-lg p-2 mt-5">
                <div class="pt-2">
                    <div class="w-full mb-8 overflow-hidden  shadow-xs">
                        <div class="bg-blue-500 p-4">
                            <div class="flex justify-between">
                                <h1 class="text-white text-base font-semibold">Mod Bayaran</h1>
                                <div class="flex">
                                    @include('pages.kutipan.tunai-modal')

                                    @include('pages.kutipan.cek-modal')

                                    <button class="bg-white hover:bg-grey text-blue-500-darkest font-semibold py-1 px-4 rounded flex ml-2 transition duration-150" wire:click="setPaymentMode('KAD KREDIT')">
                                        <span class="text-blue-500 text-xs">Kad Kredit</span>
                                    </button>

                                    @include('pages.kutipan.po-modal')
                                </div>
                            </div>
                        </div>
                        {{-- <div class="w-full ">
                            <table class="w-full whitespace-no-wrap">
                                <thead >
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Mod Bayaran</th>
                                        <th class="px-4 py-3">Amaun</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="border">
                                        <td class="px-4 py-3"></td>
                                        <td class="px-4 py-3"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>  
            </div>
            {{-- End Mod Bayaran --}}

            {{-- Start Payment --}}
            <div class="bg-white shadow-lg p-2 mt-5">
                <div class="pt-2">
                    <div class="w-full overflow-hidden shadow-xs">
                        <div class="bg-blue-500 p-4">
                            <div class="flex justify-between">
                                <h1 class="text-white text-base font-semibold">Terimaan Semasa : <span class="font-semibold">{{ number_format($confirm_paid_amount, 2) }}</span></h1>

                                <button class="bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 150px;" wire:click="payment()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-blue-500 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="text-blue-500 text-xs flex items-center">Bayar</span>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-4">
                        <div class=" flex justify-between">
                            <p class="font-semibold text-lg">Baki Perlu Kutip</p>
                            <div class="border px-6">
                                <p class="font-semibold text-xl">{{ number_format($invoice_process->sum('total_paid_amount'), 2) }}</p>
                            </div>
                        </div>
                        <div class="flex justify-between pt-3">
                            <p class="font-semibold text-lg">Baki Dipulangkan</p>
                            <div class="border px-6">
                                <p class="font-semibold text-xl">{{ number_format($balance_amount, 2) }}</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Payment --}}
        </div> 

        {{-- Start Bil Footer --}}
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <div class="mt-10 flex items-center justify-between p-2 text-sm font-semibold text-purple-100 bg-black rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">      
                <p class="text-center">No Resit <br> <span class="text-center">{{ number_format($receipts->count()) }}</span></p>
                <p class="text-center">Tunai <br> <span class="text-center">{{ number_format($receipts->where('payment_mod', 'TUNAI')->sum('total_amount'), 2) }}</span></p>
                <p class="text-center">Cek <br> <span class="text-center">{{ number_format($receipts->where('payment_mod', 'CEK')->sum('total_amount'), 2) }}</span></p>
                <p class="text-center">MO/PO <br> <span class="text-center">{{ number_format($receipts->where('payment_mod', 'MO/PO')->sum('total_amount'), 2) }}</span></p>
                <p class="text-center">Kad Kredit <br> <span class="text-center">{{ number_format($receipts->where('payment_mod', 'KAD KREDIT')->sum('total_amount'), 2) }}</span></p>
                <p class="text-center">Jumlah <br> <span class="text-center">{{ number_format($receipts->sum('total_amount'), 2) }}</span></p>
            </div>
        </div>
        {{-- End Bil Footer --}}
    </div>
</div>