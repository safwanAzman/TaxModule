<div x-data="{ modalOpen7: false}">
    <button class=" mr-2 bg-white hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex" @click="modalOpen7 = true" >
        <span class="text-blue-500">Info</span>
    </button>
    <x-general.modal-content modalActive="modalOpen7" title="Kadar %">
        <div class="bg-white mt-5 p-3">
            <div class="grid grid-cols-12 gap-6 pt-5">
                <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
                    <div class="p-4">
                        <x-general.table>
                            <x-slot name="thead">
                                <x-general.table-header class="text-left" value="Jenis Pegangan" sort="" livewire=""/>
                                <x-general.table-header class="text-left" value="Bangunan" sort="" livewire=""/>
                                <x-general.table-header class="text-left" value="Tanah Kosong" sort="" livewire=""/>
                            </x-slot>
                            <x-slot name="tbody">
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Kediaman (Landed)</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>4.0</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>3.5</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Kediaman bertingkat</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>3.5</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>3.5</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Pangsapuri Servis</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>5.0</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>5.0</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Perdagangan</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>7.0</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>6.5</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Perindustrian</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>7.5</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>7.0</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Pertanian</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>2.0</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>3.5</p>
                                    </x-general.table-body>
                                </tr>
                                <tr>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>Tanah Kosong Untuk Pembangunan</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>-</p>
                                    </x-general.table-body>
                                    <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                                        <p>-</p>
                                    </x-general.table-body>
                                </tr>
                            </x-slot>
                        </x-general.table>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex">
                        <button class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex ml-4" @click="modalOpen7 = false" >
                        <span class="text-white">Tutup</span>
                    </button>
                </div>
            </div>
        </div> 
    </x-general.modal-content>
</div>

