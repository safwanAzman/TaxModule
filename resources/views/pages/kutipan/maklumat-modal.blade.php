<div x-data="{ modalOpen: false }">
    <div class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer" @click="modalOpen = true">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
    </div>
<div x-show="modalOpen" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen"
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
                               Maklumat Cukai
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen = false"
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
                                <div class="flex flex-col-reverse col-span-12 lg:col-span-5 xxl:col-span-5 lg:block">
                                    <x-form.basic-form action="">
                                        <x-slot name="content">
                                            <div class="grid gap-5 lg:grid-cols-2 sm:grid-cols-2 mt-4">
                                                <x-form.input label="Urusniaga" value="Cukai" livewire=""/>
                                                <x-form.input label="No.Rujukan" value="C0020000014" livewire=""/>
                                                <x-form.input label="Nama" value="Ali" livewire=""/>
                                                <x-form.input label="No.IC" value="70121915163" livewire=""/>
                                            </div>
                                            <div class="grid gap-5 lg:grid-cols-1 sm:grid-cols-1 mt-4">
                                                <x-form.address-input class="" label="Alamat" value1="address1" value2="address2" value3="address3" value4="town" value5="postcode" 
                                                condition=""/>
                                            </div>
                                        </x-slot>
                                    </x-form.basic-form>
                                </div>
                                <div class="col-span-12 lg:col-span-7 xxl:col-span-7">
                                    <div class="bg-white mt-5 p-4">
                                        <x-general.table>
                                            <x-slot name="thead">
                                                <x-general.table-header class="text-left" value="Kod Hasil" sort="" livewire=""/>
                                                <x-general.table-header class="text-left" value="Status Kompaun" sort="" livewire=""/>
                                                <x-general.table-header class="text-left" value="No.Plat" sort="" livewire=""/>
                                                <x-general.table-header class="text-left" value="Amaun (RM)" sort="" livewire=""/> 
                                            </x-slot>
                                            <x-slot name="tbody">
                                                
                                                <tr>
                                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                        <p>76301</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                        <p>NOTIS</p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                        <p></p>
                                                    </x-general.table-body>
                                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                        <p>40.00</p>
                                                    </x-general.table-body> 
                                                </tr> 
                                                <tr class="bg-orange-100">
                                                <x-general.table-body colspan="3" class="text-sm text-gray-500 uppercase"></x-general.table-body>
                                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                                        <p class="font-semibold">Jumlah (RM) 40.00</p>
                                                    </x-general.table-body> 
                                                </tr> 
                                                
                    
                                            </x-slot>

                                            {{-- {{ $list->links('pagination::tailwind') }} --}}
                                        </x-general.table>
                                    </div>
                                </div> 

                           </div> 
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

