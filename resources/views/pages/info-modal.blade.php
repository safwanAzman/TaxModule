<div x-data="{ modalOpen7: true}">
    <button class=" mr-2 bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen7 = true" >
        <span class="text-blue-500">Info</span>
    </button>
<div x-show="modalOpen7" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen7"
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
                class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg lg:max-w-2xl xl:max-w-6xl sm:w-full sm:p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline"
            >
            
                <div>
                    <div class="">
                        <div class="flex items-center justify-between p-4  text-md font-semibold text-teal-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-teal">
                            <h3 class="text-lg font-semibold leading-6 text-white" id="modal-headline">
                               Kadar (%)
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen7 = false"
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
                        <div class="bg-white mt-5 p-3">
                           <div class="grid grid-cols-12 gap-6 pt-5">
                               <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                
                                <div class="p-4">
                                    <x-general.table>
                                        <x-slot name="thead">
                                            <x-general.table-header class="text-left" value="Jenis Pegangan" sort="" livewire=""/>
                                            <x-general.table-header class="text-left" value="Bangunan" sort="" livewire=""/>
                                            <x-general.table-header class="text-left" value="Tanah Kosong" sort="" livewire=""/>
                                        </x-slot>
                                        <x-slot name="tbody">
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Kediaman (Landed)</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>4.0</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>3.5</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Kediaman bertingkat</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>3.5</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>3.5</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Pangsapuri Servis</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>5.0</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>5.0</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Perdagangan</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>7.0</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>6.5</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Perindustrian</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>7.5</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>7.0</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Pertanian</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>2.0</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>3.5</p>
                                                </x-general.table-body>
                                            </tr>
                                            <tr>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>Tanah Kosong Untuk Pembangunan</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>-</p>
                                                </x-general.table-body>
                                                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                    <p>-</p>
                                                </x-general.table-body>
                                            </tr>
                                        </x-slot>
                                    </x-general.table>
                                </div>
                                     
                               </div>

                           </div>
                           <div class="flex justify-center">
                               <div class="flex">
                                     <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen7 = false" >
                                        <span class="text-white">Tutup</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
  function kemaskiniBtn() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
