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
                               Maklumat Individu (810921146261)
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
                        <div class="bg-gray-100 mt-5 p-5">
                           <div class="grid grid-cols-12 gap-6 pt-5">
                               <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">
                                   <x-form.input label="Id Pelanggan" value="810921146261" livewire=""/> 
                                   <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                        <x-form.input label="No.KP Baru" value="810921146261" livewire=""/>
                                        <x-form.dropdown label="Warna" value="Biru" default="yes">
                                            <option value="" selected>Biru</option>
                                        </x-form.dropdown>

                                        <x-form.input label="No.KP Lama" value="" livewire=""/>

                                        <x-form.dropdown label="Gelaran" value="Biru" default="yes">
                                            <option value="" selected>Encik</option>
                                        </x-form.dropdown>

                                        <x-form.input label="Nama" value="AJAK SHIRO" livewire=""/> 

                                        <x-form.input label="No Pasport" value="AJAK SHIRO" livewire=""/>

                                        <x-form.dropdown label="Warga Negara" value="Biru" default="yes">
                                            <option value="" selected>Malaysia</option>
                                        </x-form.dropdown>

                                        <x-form.dropdown label="Bangsa" value="Biru" default="yes">
                                            <option value="" selected>Melayu</option>
                                        </x-form.dropdown>
                                    </div>
                                    <div class="flex">
                                        <x-form.input label="Permastutin" value="" livewire=""/><span class="mt-8 ml-3">Tahun</span>
                                    </div>

                                    <x-form.input label="Alamat" value="No.3 JALAN RAJAWALI 5" livewire=""/>
                                    <x-form.input label="" value="TAMAN RAJAWALI" livewire=""/>
                                    <x-form.input label="" value="" livewire=""/>

                                    <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                        <x-form.input label="POSKOD" value="47500" livewire=""/>
                                        <x-form.input label="BANDAR" value="SUBANG JAYA" livewire=""/>
                                        <x-form.dropdown label="NEGERI" value="Biru" default="yes">
                                            <option value="" selected>SELANGOR</option>
                                        </x-form.dropdown>
                                    </div>

                                    <x-form.dropdown label="NEGARA" value="Biru" default="yes">
                                        <option value="" selected>MALAYSIA</option>
                                    </x-form.dropdown>
                                     
                               </div>
                               <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                                   <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                        <x-form.dropdown label="JANTINA" value="Biru" default="yes">
                                            <option value="" selected>LELAKI</option>
                                        </x-form.dropdown>

                                        <x-form.input label="TARIKH LAHIR" value="21/09/1981" livewire=""/>

                                        <x-form.dropdown label="NEGERI LAHIR" value="Biru" default="yes">
                                            <option value="" selected>14-WP KUALA LUMPUR</option>
                                        </x-form.dropdown>

                                        <x-form.input label="PENDAPATAN" value="" livewire=""/>

                                        <div class="flex">
                                            <x-form.input label="TANGGUNGAN" value="" livewire=""/><span class="mt-8 ml-3">Orang</span>
                                        </div>

                                        <x-form.dropdown label="PERKAHWINAN" value="Biru" default="yes">
                                            <option value="" selected>KAHWIN</option>
                                        </x-form.dropdown>

                                        <x-form.input label="PEKERJAAN" value="" livewire=""/>
                                   </div>
                                   <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                       <x-form.input label="NO TELEFON 1" value="" livewire=""/>
                                       <x-form.input label="NO TELEFON 2" value="" livewire=""/>
                                       <x-form.input label="NO FAX" value="" livewire=""/>
                                       <x-form.input label="EMAIL" value="" livewire=""/>
                                       
                                   </div>
                               </div>
                           </div>
                           <div class="flex justify-end">
                               <div class="flex">
                                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn()">
                                        <span class="text-white">Simpan</span>
                                    </button>
                                     <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen = false" >
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
