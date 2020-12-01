<div x-data="{ modalOpen20: false }">
    <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 180px;" @click="modalOpen20 = true">
        <x-heroicon-o-folder-add class="w-6 h-6 text-white mr-2"/>
        <span class="text-white text-sm flex items-center">Tambah Harta</span>
    </a>
    <x-general.modal-content modalActive="modalOpen20" title="Tambah Harta Baru">
        <div class="bg-gray-100 mt-5 p-5">
            {{-- Maklumat individu --}}
            <div class="grid grid-cols-12 gap-6 pt-5" >
                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                    <x-general.accordion-tab accordionActive="isOpen22" title="Maklumat Individu">
                         <x-form.basic-form action="">
                            <x-slot name="content">
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
                            </x-slot>
                         </x-form.basic-form>
                    </x-general.accordion-tab>
                </div>
            </div>
            {{-- End Maklumat Individu --}}

            {{-- start Maklumat harta --}}
            <div class="grid grid-cols-12 gap-6 pt-5" >
                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                    <x-general.accordion-tab accordionActive="isOpen23" title="Maklumat Harta">
                        <x-form.basic-form action="">
                            <x-slot name="content">
                                <div class="bg-gray-100 mt-5 p-5">
                                    <h1 class="text-lg text-blue-500 font-semibold">Maklumat Akaun</h1>
                                    <div class="grid grid-cols-12 gap-6 pt-5">
                                        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                                            <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                                <x-form.input label="No.Akaun" value="T0200703" livewire=""/>
                                                <x-form.input label="No. Rujukan" value="MPK/PEN/00001" livewire=""/>
                                                <x-form.input label="Pemilik" value="810921146261 -SUHAZLIN BINTI HARIS (Individu)" livewire=""/>
                                                <x-form.input label="Nama Di Bil" value="SUHAZLIN BINTI HARIS" livewire=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </x-slot>
                        </x-form.basic-form>
                        <x-form.basic-form action="">
                            <x-slot name="content">
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
                            </x-slot>
                        </x-form.basic-form>
                    </x-general.accordion-tab>
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
    </x-general.modal-content>
</div>




