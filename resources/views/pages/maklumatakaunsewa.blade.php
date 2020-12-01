<div x-data="{ modalOpen: true }">
    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen = true" >
        <span class="text-white">Edit</span>
    </button>
    <x-general.modal-content modalActive="modalOpen" title="MAKLUMAT AKAUN SEWA (S00600218)">
        <div class="grid grid-cols-12 gap-6" x-data="{ active: 1 }">        
            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                <div class="flex bg-white shadow-lg mb-5 mt-3">
                    <x-tab.title name="0">Maklumat Akaun Sewa</x-tab.title>
                    <x-tab.title name="1">Maklumat Peribadi</x-tab.title>
                    <x-tab.title name="2">Maklumat Organisani</x-tab.title>
                    <x-tab.title name="3">Maklumat Cagaran</x-tab.title>
                    <x-tab.title name="4">Maklumat Lesen</x-tab.title>
                    <x-tab.title name="5">Proses Akaun</x-tab.title>
                </div>
                <div>
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
                                    <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                                        <div class="flex items-center">
                                            <span>Maklumat Aset</span>
                                        </div>
                                    </div>
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
                                    <div class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                                        <div class="flex items-center">
                                            <span>Maklumat Bil Terkini</span>
                                        </div> 
                                    </div>
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
    </x-general.modal-content>
</div>
<script>
  function kemaskiniBtn() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
