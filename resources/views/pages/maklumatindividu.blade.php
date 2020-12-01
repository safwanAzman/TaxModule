<div x-data="{ modalOpen: false }">
    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen = true" >
        <span class="text-white">Edit</span>
    </button>

    <x-general.modal-content modalActive="modalOpen" title="MAKLUMAT INDIVIDU (810921146261)">
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
                        
                </div>
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
    </x-general.modal-content>
</div>


<script>
  function kemaskiniBtn() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
