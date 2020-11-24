<div x-data="{ modalOpen3: false}">
    <button class="bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen3 = true" >
        <span class="text-blue-500">Edit</span>
    </button>
<div x-show="modalOpen3" style="display: none;"
        class="fixed inset-0 z-40 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="modalOpen3"
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
                               Maklumat Nilaian (T0200549)
                            </h3>
                            
                            <div>
                            <svg
                                @click="modalOpen3 = false"
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
                                   <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                        <x-form.input label="No.Akaun" value="T0200549" livewire=""/>
                                        <x-form.input label="No.Rujukan" value="MPK/PEN/00000" livewire=""/>
                                        <x-form.input label="Pemilik" value="IND00019-JALALUDIN HASSAN (individu)" livewire=""/>
                                   </div>

                               </div>
                           </div>
                        </div>

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
                                                        <p>Pembetulan Kadar Pembetulan Kadar</p>
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
                        

                    <div class="grid grid-cols-12 gap-6 pt-5 bottom-0">
                        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                                <div class="bg-blue-500 p-5">
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
  function kemaskiniBtn3() {
       Swal.fire('Telah Berjaya Kemaskini', '', 'success')
  }
</script>
