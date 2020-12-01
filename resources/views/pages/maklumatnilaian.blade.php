<div x-data="{ modalOpen3: false}">
    <button class="bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen3 = true" >
        <span class="text-blue-500">Edit</span>
    </button>
    <x-general.modal-content modalActive="modalOpen3" title="Maklumat Nilaian (T0200549)">

        {{-- Start Maklumat Akaun --}}
         <div class="bg-gray-100 mt-5 p-5">
            <h1 class="text-lg text-blue-500 font-semibold">Maklumat Akaun</h1>
            <div class="grid grid-cols-12 gap-6 pt-5">
                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                    <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                        <x-form.input label="No.Akaun" value="T0200549" livewire=""/>
                        <x-form.input label="No. Rujukan" value="MPK/PEN/00000" livewire=""/>
                        <x-form.input label="Pemilik" value="SUHAZLIN BINTI HARIS (individu)" livewire=""/>
                    </div>

                </div>
            </div>
        </div>
        {{-- End Maklumat Akaun --}}

        {{-- Start Maklumat Nilaian --}}
         <div class="bg-gray-100 mt-5 p-5">
            <h1 class="text-lg text-blue-500 font-semibold">Maklumat Nilaian</h1>
            <div class="grid grid-cols-12 gap-6 pt-5">
                <div class="flex flex-col-reverse col-span-12 lg:col-span-6 xxl:col-span-6 lg:block">
                    <div class=" grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                        <x-form.input label="Tarikh Semakan" value="13/05/2015" livewire=""/>
                        <x-form.input label="Tarikh Mula Kadar/Nilaian" value="01/07/2015" livewire=""/>
                        <x-form.input label="Nilaian Tahunan" value="2100.00" livewire=""/>
                        <x-form.input label="Kadar" value="10.00 %" livewire=""/>
                        <x-form.input label="Cukai Tahunan" value="210.00" livewire=""/>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <x-form.dropdown label="Sebab Perubahan" value="" default="yes">
                        <option value="" selected>RESTORAN</option>
                    </x-form.dropdown>

                    <x-form.input label="Catatan Perubahan" value="" livewire=""/>
                </div>
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <table class="table-fixed mt-3 bg-white">
                        <thead>
                            <tr class="boder bg-blue-500 text-white">
                                <th class="px-4 py-2 text-left" style="width: 12%"></th>
                                <th class="px-4 py-2 text-left" style="width: 15%">Tarikh Ubah</th>
                                <th class="px-4 py-2 text-left" style="width: 20%">Tarikh Nilaian</th>
                                <th class="px-4 py-2 text-left" style="width: 23%">Nilaian Tahunan</th>
                                <th class="px-4 py-2 text-left" style="width: 20%">Kadar</th>
                                <th class="px-4 py-2 text-left" style="width: 20%">Cukai Tahunan</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>Baru</p>
                                    <p>lama</p>
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>27/12/2017</p>
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>01/07/2015</p>
                                    <p>01/07/2015</p>
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>2,100.00</p>
                                    <p>2,100.00</p>
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>10.00</p>
                                    <p>11.00</p>
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>210.00</p>
                                    <p>231.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 text-base font-semibold">
                                    <p>Sebab</p>
                                    
                                </td>
                                <td class="border px-4 py-2 text-base font-semibold" colspan="5">
                                    <p>Pembetulan Kadar</p>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="flex pt-5">
                    <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" onclick="kemaskiniBtn3()">
                        <span class="text-white">Simpan</span>
                    </button>
                        <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen3 = false" >
                        <span class="text-white">Tutup</span>
                    </button>
                </div>
            </div>
        </div>
        {{-- End Maklumat Nilaian --}}

        {{-- Start  --}}
        <div class="grid grid-cols-12 gap-6 pt-5 bottom-0">
            <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                    <div class="bg-black p-5">
                        <div class="flex justify-between text-white">
                            <span class="mr-2 -mt-4 text-base ">Pengguna Masuk :</span>
                            <span class="mr-2 -mt-4 text-base text-gray-200">noorjuliana</span>
                        

                            <span class=" ml-3 mr-2 -mt-4 text-base ">Tarikh Masuk :</span>
                            <span class="mr-2 -mt-4 text-base text-gray-200">2015-05-15 10:12:56</span>
                            

                            <span class="ml-3 mr-2 -mt-4 text-base">Pengguna Ubah :</span>
                            <span class="mr-2 -mt-4 text-base text-gray-200">Admin</span>

                            <span class="ml-3 mr-2 -mt-4 text-base">Tarikh Ubah :</span>
                            <span class="mr-2 -mt-4 text-base text-gray-200">2018-02-03 23:13:11</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End  --}}


    </x-general.modal-content>
</div>


<script>
  function kemaskiniBtn3() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
