<div x-data="{ modalOpen2: true}">
    <button class="bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen2 = true" >
        <span class="text-blue-500">Edit</span>
    </button>
<div x-show="modalOpen2" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen2"
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
                               Maklumat Harta (T0200703)
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen2 = false"
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
                            <div class="flex justify-end">
                               <div class="flex pt-5">
                                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn2()">
                                        <span class="text-white">Simpan</span>
                                    </button>
                                     <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen2 = false" >
                                        <span class="text-white">Tutup</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        
                        <div class="bg-gray-100 mt-5 p-5">
                            <h1 class="text-lg text-blue-500 font-semibold">Pengiraan Nilaian Tahunan (T0200549)</h1>
                           <div class="grid grid-cols-12 gap-6 pt-5">
                               <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                    <div x-data="{ isOpen1: false}" >
                                        <button class="flex items-center justify-between w-full py-3 font-semibold bg-blue-500 p-4" @click="isOpen1 = !isOpen1">
                                            <div class="text-base text-white">Nilaian Terperinci</div>
                                            <svg x-show="!isOpen1" class="fill-current text-white" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                            <svg x-show="isOpen1" class="fill-current text-white" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                        </button>

                                        <div class="p-4" x-show="isOpen1">
                                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.dropdown label="Kategori Pegangan" value="Biru" default="yes">
                                                    <option value="" >Sila Pilih</option>
                                                    <option value="" >Kediaman (Landed)</option>
                                                    <option value="" >Kediaman Bertingkat</option>
                                                    <option value="" >Pangsapuri Servis</option>
                                                    <option value="" selected>Perdagangan</option>
                                                    <option value="" >Perindustrian</option>
                                                    <option value="" >Pertanian</option>
                                                    <option value="" >Tanah Kosong untuk Pembangunan</option>
                                                </x-form.dropdown>
                                                
                                                <x-form.dropdown label="Maklumat Bangunan" value="Biru" default="yes">
                                                    <option value="" >Sila Pilih</option>
                                                    <option value="" selected>Teres 1 Tingkat</option>
                                                    <option value="" >Teres 2 Tingkat</option>
                                                    <option value="" >Rumah Sesebuah</option>
                                                </x-form.dropdown>

                                                 <x-form.input label="(A) Nilai Pasaran skp (RM)" value="40.00" livewire=""/>

                                                 <x-form.input label="(B) Kadar T.K." value="3.5%" livewire=""/>

                                                 <x-form.input label="(C) Nilai Pasaran (RM) - KP x (A)" value="400,000.00" livewire=""/>

                                                <x-form.input label="(D) Nilaian Tahunan (RM) - (C) x 10%" value="40,000.00" livewire=""/>

                                                <x-form.input label="Cukai Taksiran Setahun (RM) - (D) x (B)" value="1400.00" livewire=""/>

                                                <x-form.input label="Cukai Taksiran Sepenggal (RM)" value="700.00" livewire=""/>
                                            </div>
                                            <div class="flex justify-end">
                                                <div class="flex pt-5">
                                                        <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn2()">
                                                            <span class="text-white">Simpan</span>
                                                        </button>
                                                        <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen2 = false" >
                                                            <span class="text-white">Tutup</span>
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                           </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 mt-5 p-5">
                            <h1 class="text-lg text-blue-500 font-semibold">Sejarah Perubahan Maklumat Harta (T0200549)</h1>
                           <div class="grid grid-cols-12 gap-6 pt-5">
                               <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                    <div x-data="{ isOpen2: false}">
                                        <button class="flex items-center justify-between w-full py-3 font-semibold bg-blue-500 p-4" @click="isOpen2 = !isOpen2">
                                            <div class="text-base text-white">Sejarah Perubahan</div>
                                            <svg x-show="!isOpen2" class="fill-current text-white" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                                            <svg x-show="isOpen2" class="fill-current text-white" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                                        </button>
                                        <table class="table-fixed mt-3 bg-white" x-show="isOpen2">
                                            <thead>
                                            <tr class="boder bg-blue-500 text-white">
                                                <th class="px-4 py-2 text-left" style="width: 15%">Tarikh Pengguna Ubah</th>
                                                <th class="px-4 py-2 text-left" style="width: 40%">Catatan</th>
                                                <th class="px-4 py-2 text-left" style="width: 15%"></th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>02/02/2018</p>
                                                    <p>Jamal</p>
                                                </td>
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>UDATE ck_harta</p>
                                                </td>
                                                <td class="border px-4 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 text-green-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </td> 
                                            </tr>

                                            <tr class="bg-gray-100">
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>02/02/2018</p>
                                                    <p>root</p>
                                                </td>
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>UDATE ck_harta</p>
                                                    <p>Alamat Harta <span class="text-blue-500">BAGUNAN YAKIN</span></p>
                                                    <p>Tarikh Ubah <span class="text-blue-500">2017-12-27 13:17:00</span></p>
                                                </td>
                                                <td class="border px-4 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 text-red-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </td> 
                                            </tr>

                                            <tr class="">
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>02/02/2018</p>
                                                    <p>root</p>
                                                </td>
                                                <td class="border px-4 py-2 text-base font-semibold">
                                                    <p>UDATE ck_harta</p>
                                                    <p>No.Ruj. <span class="text-blue-500">HM0002</span></p>
                                                    <p>Nota <span class="text-blue-500">Pembetulan Maklumat</span></p>
                                                    <p>Ukuran <span class="text-blue-500">LT0002 kaki persegi</span></p>
                                                    <p>Luasan Tanah <span class="text-blue-500">1000</span></p>
                                                    <p>ID Pengubah <span class="text-blue-500">root</span></p>
                                                    <p>Tarikh Ubah <span class="text-blue-500">2017-12-27 13:15:57</span></p>
                                                    <p>Jenis Bagunan <span class="text-blue-500">JB0009</span></p>
                                                    <p>Status Bagunan <span class="text-blue-500">JS0001</span></p>
                                                    <p>No Hakmilik <span class="text-blue-500">HM777</span></p>
                                                    <p>No Lot <span class="text-blue-500">PT767</span></p>
                                                    <p>Luasan Bangunan <span class="text-blue-500">150</span></p>
                                                    <p>Tarikh CF <span class="text-blue-500">2017-12-01 00:00:00</span></p>
                                                    <p>Tarikh S&P <span class="text-blue-500">2017-12-01 00:00:00</span></p>
                                                    <p>Harga Beli <span class="text-blue-500">560000.00</span></p>
                                                </td>
                                                <td class="border px-4 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-10 h-10 text-red-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </td> 
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                           </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-6 pt-5 bottom-0">
                        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                                <div class="bg-black p-5">
                                    <div class="flex items-center text-white">
                                            <span class="mr-2 -mt-4 text-base ">Pengunna Masuk :</span>
                                            <span class="mr-2 -mt-4 text-base text-gray-200">noorjuliana</span>
                                        

                                            <span class=" ml-3 mr-2 -mt-4 text-base ">Tarikh Masuk :</span>
                                            <span class="mr-2 -mt-4 text-base text-gray-200">2015-05-15 10:12:56</span>
                                            

                                            <span class="ml-3 mr-2 -mt-4 text-base">Pengguna Ubah</span>
                                            <span class="mr-2 -mt-4 text-base text-gray-200">Jamal</span>

                                            <span class="ml-3 mr-2 -mt-4 text-base">Tarikh Ubah</span>
                                            <span class="mr-2 -mt-4 text-base text-gray-200">2018-02-03 23:13:11</span>
                                        
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
</div>
<script>
  function kemaskiniBtn2() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
