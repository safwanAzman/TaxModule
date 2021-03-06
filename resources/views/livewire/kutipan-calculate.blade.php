<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3"  x-data="{ active: 15 }">
     <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-2 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
      <div class="flex items-center">
        <span>Teller</span>
      </div>
       <a  href="{{route('Kutipan.index')}}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white mr-2 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>
    <div class="grid grid-cols-12 gap-1">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="bg-white shadow-lg p-4">
                <div class="flex justify-between">
                    <x-tab.title name="0" livewire="wire:click=chooseCategory('C0')">
                      <x-heroicon-o-home class="w-6 h-6 ml-2"/>
                      <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Cukai</span>
                    </x-tab.title>

                    <x-tab.title name="1" livewire="wire:click=chooseCategory('L0')">
                        <x-heroicon-o-credit-card class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Lesen</span>
                    </x-tab.title>

                    <x-tab.title name="2" livewire="wire:click=chooseCategory('S0')">
                        <x-heroicon-o-key class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Sewa</span>
                    </x-tab.title>
            
                    <x-tab.title name="3" livewire="wire:click=chooseCategory('P0')">
                        <x-heroicon-o-globe class="w-6 h-6 ml-2"/>
                       <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Pelbagai</span>
                    </x-tab.title>

                    <x-tab.title name="4" livewire="wire:click=chooseCategory('CA')">
                        <x-heroicon-o-folder class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Cagaran</span>
                    </x-tab.title>

                    <x-tab.title name="5" livewire="wire:click=chooseCategory('KM')">
                        <x-heroicon-o-library class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Kompaun MDP</span>
                    </x-tab.title>

                    <x-tab.title name="6" livewire="wire:click=chooseCategory('KS')">
                        <x-heroicon-o-library class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Kompaun Suasa</span>
                    </x-tab.title>

                    <x-tab.title name="7" livewire="wire:click=chooseCategory('LK')">
                        <x-heroicon-o-map class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Lot Kosong</span>
                    </x-tab.title>

                    <x-tab.title name="8" livewire="wire:click=chooseCategory('W0')">
                        <x-heroicon-o-home class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Waran</span>
                    </x-tab.title>

                    <x-tab.title name="9" livewire="wire:click=chooseCategory('T0')">
                        <x-heroicon-o-clipboard-list class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Tempahan</span>
                    </x-tab.title>

                    <x-tab.title name="10" livewire="wire:click=chooseCategory('BA')">
                        <x-heroicon-o-cloud class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Air</span>
                    </x-tab.title>

                    <x-tab.title name="11" livewire="wire:click=chooseCategory('BE')">
                        <x-heroicon-o-light-bulb class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Elektrik</span>
                    </x-tab.title>

                    <x-tab.title name="12" livewire="wire:click=chooseCategory('BS')">
                        <x-heroicon-o-presentation-chart-line class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Setempat PBT</span>
                    </x-tab.title>

                    <x-tab.title name="13" livewire="wire:click=chooseCategory('BC')">
                        <x-heroicon-o-presentation-chart-line class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Bil Cukai Tanah</span>
                    </x-tab.title>

                    <x-tab.title name="14" livewire="wire:click=chooseCategory('P1')">
                        <x-heroicon-o-newspaper class="w-6 h-6 ml-2"/>
                        <span class="tooltip-text bg-blue-500 border rounded border-blue-500 text-white -mt-14">Permit</span>
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
                                <span class="mr-2 mt-2 text-base text-gray-500">No. Rujukan </span>
                                <x-form.input livewire="wire:model=search" type="text" label="" value=""/>
                                <a href="#" class="mt-3 ml-2" wire:click="refresh()">
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
                                <x-general.table-header class="text-left" value="No. Rujukan" sort="" livewire=""/>
                                <x-general.table-header class="text-right" value="Jumlah Bil" sort="" livewire=""/>
                                <x-general.table-header class="text-right" value="Amaun Bayar" sort="" livewire=""/>
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
                                    <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                        <p>{{ number_format($item1->total_bil_amount, 2) }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
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
                                    <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                        <p>{{ number_format($item2->total_bil_amount, 2) }}</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
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
                            <x-general.table-header class="text-left" value="Keterangan Transaksi" sort="" livewire=""/>
                            <x-general.table-header class="text-left" value="" sort="" livewire=""/>
                            <x-general.table-header class="text-right" value="Amaun (RM)" sort="" livewire=""/> 
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
                                    <p></p>
                                </x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                                    <p>{{ number_format($item3->amount, 2) }}</p>
                                </x-general.table-body> 
                            </tr> 
                            @empty @endforelse
                            <tr class="bg-orange-100">
                            <x-general.table-body colspan="3" class="text-sm text-gray-500 uppercase"></x-general.table-body>
                                <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
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

                                <button class="bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" onclick="payment_process()">
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
                                <p class="text-right font-semibold text-xl">{{ number_format($invoice_process->sum('total_paid_amount'), 2) }}</p>
                            </div>
                        </div>
                        <div class="flex justify-between pt-3">
                            <p class="font-semibold text-lg">Baki Dipulangkan</p>
                            <div class="border px-6">
                                <p class="text-right font-semibold text-xl">{{ number_format($balance_amount, 2) }}</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Payment --}}
        </div>

        <!-- Start Table Taksiran -->
        @if( isset($transaction_details) )
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12 mt-5">
            <div class="flex justify-between mb-3">
                <div class="text-blue-500 font-semibold text-lg ">
                    <h1>Maklumat Terakhir Transaksi</h1>
                </div>
            </div>
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center bg-green-100" value="Bil" sort="" livewire="" />
                    <x-general.table-header class="text-center bg-green-100" value="No Resit" sort="" livewire="" />
                    <x-general.table-header class="text-center bg-green-100" value="Tarikh Bil" sort="" livewire="" />
                    <x-general.table-header class="text-center bg-green-100" value="No Rujukan" sort="" livewire="" />
                    <x-general.table-header class="text-center bg-green-100" value="Urusniaga" sort="" livewire="" />
                    <x-general.table-header class="text-right bg-green-100" value="Amaun Bayar" sort="" livewire="" />
                    <x-general.table-header class="text-center bg-green-100" value="Tindakan" sort="" livewire="" />
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($transaction_details as $detail)
                    <tr>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $loop->iteration }}.</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $detail->receipt_no }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ date('d/m/Y', strtotime($detail->invoice->bil_date)) }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $detail->invoice->bil_no }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $detail->invoice->business_type }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                            <p>{{ number_format($detail->invoice->total_paid_amount, 2) }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <div class="flex justify-center">
                                <a class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer" target="blank" href="{{ $detail->invoice->business_type == 'Lesen' ? route('taxInvoice',['id' => $detail->invoice->id]) : route('resitPDF',['id' => $detail->invoice->id]) }}">
                                    <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                    </svg>
                                </a>
                            </div>
                        </x-general.table-body>
                    </tr>
                    @empty @endforelse
                </x-slot>
            </x-general.table>
        </div>
        @endif
        <!-- End Table Taksiran -->

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

<script>
    function payment_process(){
        Swal.fire({
            title: 'Teruskan Transaksi?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Ya`,
            denyButtonText: `Tidak`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                @this.payment()
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }

    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>