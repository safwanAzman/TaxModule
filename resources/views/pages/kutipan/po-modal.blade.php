<div x-data="{ modalOpen4: false}">
    <button class="bg-white hover:bg-grey text-blue-500-darkest font-semibold py-1 px-4 rounded flex ml-2 transition duration-150" @click="modalOpen4 = true" wire:click="setPaymentMode('MO/PO')">
        <span class="text-blue-500 text-xs">MO/PO</span>
    </button>
<div x-show="modalOpen4" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen4"
                x-description="Background overlay, show/hide based on modal state."
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity"
            >
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
            <div x-show="open"
                x-description="Modal panel, show/hide based on modal state."
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg lg:max-w-2xl xl:max-w-2xl sm:w-full sm:p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline"
            >
            
                <div>
                    <div class="">
                        <div class="flex items-center justify-between p-4  text-md font-semibold text-teal-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal">
                            <h3 class="text-lg font-semibold leading-6 text-white" id="modal-headline">
                                Pembayaran Secara MO/PO
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen4 = false"
                                class="w-8 h-8 text-white cursor-pointer"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>
                            </div>
                        </div>
                        <div class="bg-gray-100 mt-5 p-4">
                           <div class="grid grid-cols-12 gap-6 p-5">
                                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                   <x-form.basic-form action="">
                                        <x-slot name="content">
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input  label="Postal Order Number" value="" livewire="wire:model=check_no"/>
                                                <x-form.input  type="date" label="Postal Order Date" value="" livewire="wire:model=check_date"/>
                                            </div>
                                            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input  label="Jumlah" value="" livewire="wire:model=paid_amount"/>
                                            </div>
                                        </x-slot>
                                        <div class="flex justify-center mt-5">
                                            <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-semibold py-1 px-4 rounded flex transition duration-150" @click="modalOpen4 = false" wire:click="confirmPayment('{{$document_no}}', '{{$bank_id}}', '{{$check_no}}', '{{$check_date}}', {{$paid_amount}})">
                                                <span class="text-white">Simpan</span>
                                            </button>
                                            <div class="cursor-pointer bg-blue-500 hover:bg-grey text-blue-500-darkest font-semibold py-1 px-4 rounded flex transition duration-150 ml-2"  @click="modalOpen4 = false">
                                                <span class="text-white">Tutup</span>
                                            </div>
                                        </div>
                                    </x-form.basic-form>
                                </div>
                           </div> 
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

