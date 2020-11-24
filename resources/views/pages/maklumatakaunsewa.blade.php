<div x-data="{ modalOpen: false }">
    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen = true" >
        <span class="text-white">Edit</span>
    </button>
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
                                Maklumat Akaun Sewa (S00600218)
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
                        <div class="grid grid-cols-12 gap-6" x-data="{ active: 1 }">
                            <!-- With avatar -->
                            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                                <div class="p-4">
                                    <div class="">
                                        <div class="flex bg-white shadow-lg mb-10">
                                            <x-tab.title name="0">Maklumat Akaun Sewa</x-tab.title>
                                            <x-tab.title name="1">Maklumat Peribadi</x-tab.title>
                                            <x-tab.title name="2">Maklumat Organisani</x-tab.title>
                                            <x-tab.title name="3">Maklumat Cagaran</x-tab.title>
                                            <x-tab.title name="4">Maklumat Lesen</x-tab.title>
                                            <x-tab.title name="5">Proses Akaun</x-tab.title>
                                        </div>
                                    </div>    
                                    <x-tab.content name="0"></x-tab.content>

                                    <x-tab.content name="1">
                                        <div class="grid grid-cols-12 gap-6">
                                        <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
                                            <div class="p-4 bg-gray-100">
                                                <h1 class="font-semibold text-base text-blue-500 mb-2">MEXI SERTI SDN BHD (1111x -Organisasi)</h1>
                                                <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                    <x-form.input label="No Akaun" value="S00600218" livewire=""/>
                                                    <x-form.input label="No Fail" value="MPK0000909" livewire=""/>
                                                    <x-form.input label="Status Akaun" value="Aktif" livewire=""/>
                                                    <x-form.input label="Id Permohonan" value="201700001" livewire=""/>
                                                    <x-form.input label="Tarikh Perjanjian Sewa" value="01/12/2017" livewire=""/>
                                                    <x-form.input label="No.Akaun Lesen" value="201700006" livewire=""/>
                                                    <x-form.input label="No.Akaun Lesen" value="201700006" livewire=""/>
                                                    <x-form.dropdown label="Kategori Sewa" value="" default="yes">
                                                        <option value="" selected>Sila Pilih</option>
                                                    </x-form.dropdown>
                                                    <x-form.dropdown label="Jenis Perniagaan" value="" default="yes">
                                                        <option value="" selected>PERALATAN BAYI</option>
                                                    </x-form.dropdown>
                                                    <x-form.input label="Harga Sewa" value="70.00" livewire=""/>
                                                    <x-form.dropdown label="Frekuensi Harga" value="" default="yes">
                                                        <option value="" selected>BULANAN</option>
                                                    </x-form.dropdown>
                                                </div>
                                                <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                    <x-form.input label="Tarikh Mula Sewa" value="01/07/2017" livewire=""/>
                                                    <x-form.input label="Tarikh Tamat Sewa" value="30/06/2018" livewire=""/>
                                                    <x-form.input label="Tarikh Tamat Asal" value="" livewire=""/>
                                                    <x-form.input label="Tarikh Ditamatkan" value="" livewire=""/>
                                                </div>

                                                 <div class="flex justify-end">
                                                    <div class="flex">
                                                            <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn()">
                                                                <span class="text-white">Simpan</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
                                            <div class="bg-white shadow-lg">
                                                <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                                                    <div class="flex items-center">
                                                        <span>Maklumat Aset</span>
                                                    </div>
                                                    <div class="text-gray-600"></div>
                                                </a>
                                                    <div class="p-4">
                                                        <p class="font-semibold text-base text-blue-500 mb-2">PASAR JALAN 6/1 SEKSYEN 6</p>
                                                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                            <p class="font-semibold">No Lot: <br><span class="text-blue-600">GERAI B11</span></p>
                                                            <p class="font-semibold">No Rujukan Aset: <br><span class="text-blue-600">GERAI B11</span></p>
                                                            <p class="font-semibold">Harga Sewa: <br><span class="text-blue-600">70.00</span></p>
                                                            <p class="font-semibold">Kegunaan: <br><span class="text-blue-600">PASAR BASAH</span></p>
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="bg-white shadow-lg mt-4">
                                                <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                                                    <div class="flex items-center">
                                                        <span>Maklumat Bil Terkini</span>
                                                    </div>
                                                    <div class="text-gray-600"></div>
                                                </a>
                                                    <div class="p-4">
                                                        <p class="font-semibold mb-2">Alamat Bil (1): <br><span class="text-blue-600">ASDADASD <br>15400 <br> KELANTAN</span></p>
                                                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                            <p class="font-semibold">Tarikh Akhir Proses: <br><span class="text-blue-600"></span></p>
                                                            <p class="font-semibold">Tunggakan <br><span class="text-blue-600">(RM 70.00)</span></p>
                                                            <p class="font-semibold">Amaun Sewa: <br><span class="text-blue-600">RM 70.00</span></p>
                                                            <p class="font-semibold">Jumlah Bil: <br><span class="text-blue-600">RM0.00</span></p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                    </x-tab.content>

                                    <x-tab.content name="2"></x-tab.content>
                                    <x-tab.content name="3"></x-tab.content>
                                    <x-tab.content name="4"></x-tab.content>
                                    <x-tab.content name="5"></x-tab.content>
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
