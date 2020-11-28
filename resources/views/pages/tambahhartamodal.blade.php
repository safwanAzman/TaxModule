<div x-data="{ modalOpen20: false }">
    {{-- <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen = true" >
        <span class="text-white">Edit</span>
    </button> --}}
    <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 180px;" @click="modalOpen20 = true">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
        </svg>
        <span class="text-white text-sm flex items-center">Tambah Harta</span>
    </a>
<div x-show="modalOpen20" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen20"
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
                               Tambah Harta Baru
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen20 = false"
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
                            {{-- Maklumat individu --}}
                           <div class="grid grid-cols-12 gap-6 pt-5" >
                                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                <div x-data="{ isOpen22: false}">
                                    <div class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400 cursor-pointer" @click="isOpen22 = !isOpen22">
                                        <div class="text-base">Malumat Individu</div>
                                        <svg x-show="!isOpen22" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                        <svg x-show="isOpen22" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                    </div>
                                    <div  class="mt-3" x-show="isOpen22">
                                        <div class="py-5">
                                             <h1 class="text-lg text-blue-500 font-semibold">Maklumat individu</h1>
                                        </div>
                                        <x-form.input label="Id Pelanggan" value="810921146261" livewire=""/> 
                                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input label="No.KP Baru" value="810921146261" livewire=""/>
                                                <x-form.dropdown label="Warna" value="Biru" default="yes">
                                                    <option value="" selected>Biru</option>
                                                </x-form.dropdown>

                                                <x-form.input label="No.KP Lama" value="" livewire=""/>

                                                <x-form.dropdown label="Gelaran" value="Biru" default="yes">
                                                    <option value="" selected>Puan</option>
                                                </x-form.dropdown>

                                                <x-form.input label="Nama" value="SUHAZLIN BINTI HARIS" livewire=""/> 

                                                <x-form.input label="No Pasport" value="" livewire=""/>

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

                                            <x-form.input label="Alamat" value="BLOK 7 TINGKAT 4" livewire=""/>
                                            <x-form.input label="" value="APARTMENT INDAH" livewire=""/>
                                            <x-form.input label="" value="JALAN MUHUBBAH" livewire=""/>

                                            <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                                <x-form.input label="POSKOD" value="25300" livewire=""/>
                                                <x-form.input label="BANDAR" value="KUANTAN" livewire=""/>
                                                <x-form.dropdown label="NEGERI" value="Biru" default="yes">
                                                    <option value="" selected>PAHANG</option>
                                                </x-form.dropdown>
                                            </div>

                                            <x-form.dropdown label="NEGARA" value="Biru" default="yes">
                                                <option value="" selected>MALAYSIA</option>
                                            </x-form.dropdown>
                                            
                                    
                                            <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                                                <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                        <x-form.dropdown label="JANTINA" value="Biru" default="yes">
                                                            <option value="" selected>PEREMPUAN</option>
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
                                    </div>
                                </div>
                           </div>
                           {{-- End Maklumat Individu --}}

                           {{-- start Maklumat harta --}}
                            <div class="grid grid-cols-12 gap-6 pt-5" >
                                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                    <div x-data="{ isOpen23: false}">
                                        <div class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400 cursor-pointer" @click="isOpen23 = !isOpen23">
                                            <div class="text-base">Malumat Harta</div>
                                            <svg x-show="!isOpen23" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                            <svg x-show="isOpen23" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                        </div>
                                        <div  class="mt-3" x-show="isOpen23">
                                        
                                            <div class="bg-gray-100 mt-5 p-5">
                                                <h1 class="text-lg text-blue-500 font-semibold">Maklumat Akaun</h1>
                                                <div class="grid grid-cols-12 gap-6 pt-5">
                                                    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                                <x-form.input label="No.Akaun" value="T0200703" livewire=""/>
                                                                <x-form.input label="No.Rujukan" value="MPK/PEN/00001" livewire=""/>
                                                                <x-form.input label="Pemilik" value="810921146261 -SUHAZLIN BINTI HARIS (Individu)" livewire=""/>
                                                                <x-form.input label="Nama Di Bil" value="SUHAZLIN BINTI HARIS" livewire=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="bg-gray-100 mt-5 p-5">
                                                <h1 class="text-lg text-blue-500 font-semibold">Maklumat Teperinci Harta</h1>
                                                <div class="grid grid-cols-12 gap-6 pt-5">
                                                    <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">
                                                        <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                            <x-form.dropdown label="Status Akaun" value="Biru" default="yes">
                                                                <option value="" selected>AKTIF</option>
                                                            </x-form.dropdown>
                                                            <x-form.dropdown label="Status Harta" value="Biru" default="yes">
                                                                <option value="" selected>Normal</option>
                                                            </x-form.dropdown>
                                                            <x-form.dropdown label="Kategori Harta" value="Biru" default="yes">
                                                                <option value="" selected>BAGUNAN</option>
                                                            </x-form.dropdown>
                                                            <x-form.input label="Tarikh Daftar" value="15/05/2015" livewire=""/>
                                                        </div>
                                                            <x-form.input label="Alamat" value="BLOK 7 TINGKAT 4" livewire=""/>
                                                            <x-form.input label="" value="APARTMENT INDAH" livewire=""/>
                                                            <x-form.input label="" value="JALAN MUHUBBAH" livewire=""/>

                                                            <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                                                <x-form.input label="POSKOD" value="25300" livewire=""/>
                                                                <x-form.input label="BANDAR" value="KUANTAN" livewire=""/>
                                                                <x-form.dropdown label="NEGERI" value="" default="yes">
                                                                    <option value="" selected>PAHANG</option>
                                                                </x-form.dropdown>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p class="font-semibold text-blue-500">Bilangan Pemilik</p>
                                                            </div>
                                                            <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                                                <x-form.input label="Tarikh Beli" value="" livewire=""/>
                                                                <x-form.input label="Harga Beli" value="" livewire=""/>
                                                                <x-form.input label="Tarikh C/F" value="" livewire=""/>
                                                            </div>
                                                    </div>
                                                    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                                                        <x-form.dropdown label="Jenis Bagunan" value="" default="yes">
                                                                <option value="" selected>RESTORAN</option>
                                                            </x-form.dropdown>

                                                            <x-form.dropdown label="Struktur Bagunan" value="" default="yes">
                                                                <option value="" selected>Sila Pilih</option>
                                                            </x-form.dropdown>

                                                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                                <x-form.input label="Luas Bagunan" value="10,000.00" livewire=""/>
                                                                <div class="mt-5">
                                                                    <x-form.dropdown label="" value="" default="yes">
                                                                        <option value="" selected>KPS</option>
                                                                        <option value="" >MPS</option>
                                                                    </x-form.dropdown>
                                                                </div>
                                                            </div>

                                                            <x-form.dropdown label="Kegunaan Tanah" value="" default="yes">
                                                                <option value="" selected>Perniagaan</option>
                                                            </x-form.dropdown>

                                                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                                <x-form.input label="Keluasan Tanah" value="" livewire=""/>
                                                                <div class="mt-5">
                                                                    <x-form.dropdown label="" value="" default="yes">
                                                                        <option value="" selected>Sila Pilih</option>
                                                                    </x-form.dropdown>
                                                                </div>
                                                            </div>
                                                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                                <x-form.input label="No Hak Milik" value="1235678" livewire=""/>

                                                                <x-form.input label="No Lot" value="767" livewire=""/>
                                                            </div>
                                                            <x-form.input label="Catatan" value="" livewire=""/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                           {{-- End Maklumat harta --}}
                           
                           <div class="flex justify-center mt-4">
                                <div class="flex pt-5">
                                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn()">
                                        <span class="text-white">Simpan</span>
                                    </button>
                                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen20 = false" >
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
