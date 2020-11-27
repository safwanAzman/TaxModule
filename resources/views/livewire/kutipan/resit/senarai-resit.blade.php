<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="#">
        <div class="flex items-center">
            <span>Senarai Transaksi</span>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Tempoh</span>
                    <x-form.dropdown label="" value="" default="yes" value="search_date">
                        <option class="" value="0">Hari ini</option>
                        <option class="" value="1">Semalam</option>
                        <option class="" value="7">7 Hari</option>
                    </x-form.dropdown>
                    {{-- <x-form.input type="date" label="" value="" livewire="wire:model=search_date" /> --}}

                    {{-- <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">No Rujukan</span>
                    <x-form.input label="" value="" livewire="" /> --}}
                </div>
            </div>
        </div>

        <!-- Start Table search -->
        @if( isset($transactions) )
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center" value="Bil" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Kumpulan Resit" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Mod Bayaran" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Amaun Bayaran dibuat" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Jumlah Bayaran dibuat" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Baki dipulangkan" sort="" livewire="" />
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($transactions as $transaction)
                    <tr wire:click="transactionDetail({{$transaction->receipt_group}})">
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $loop->iteration }}.</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>
                                {{ substr($transaction->min, 6) }}
                                @if( $transaction->min <> $transaction->max )
                                {{ ' - '.substr($transaction->max, 6) }}
                                @endif
                            </p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $transaction->payment_mod }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                            <p>{{ number_format($transaction->amount_paid, 2) }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                            <p>{{ number_format($transaction->total, 2) }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                            <p>{{ number_format($transaction->balance_return, 2) }}</p>
                        </x-general.table-body>
                    </tr>
                    @empty @endforelse
                </x-slot>
            </x-general.table>
            {{ $transactions->links() }}
            <div class="col-span-12 lg:col-span-12 xxl:col-span-12 mt-3">
                <div class="flex justify-between mb-3">
                    <div class="text-blue-500 font-semibold text-lg ">
                        <h1></h1>
                    </div>
                    <a href="{{ route('senaraiTransaksiPDF', ['duration' => $search_date]) }}" target="blank" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        <span class="text-white text-sm flex items-center">Cetak</span>
                    </a>
                </div>
            </div>
        </div>
        @endif
        <!-- End Table search -->

        <!-- Start Table Taksiran -->
        @if( isset($transaction_details) )
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12 mt-5">
            <div class="flex justify-between mb-3">
                <div class="text-blue-500 font-semibold text-lg ">
                    <h1>Maklumat Terperinci</h1>
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
                                <a class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer" href="{{ route('resitPDF',['id' => $detail->invoice->id]) }}">
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
    </div>
</div>
