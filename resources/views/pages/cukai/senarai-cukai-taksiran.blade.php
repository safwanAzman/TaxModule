@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" >
      <div class="flex items-center">
        <span>Senarai Cukai Taksiran</span>
      </div>
    </div>
 <div class="grid grid-cols-12 gap-6">
    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
        <div class="flex justify-between">
            <div class="flex items-center">
                <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Tarikh</span>
                <x-form.input type="date" label="" value="" livewire=""/>

                <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">No Rujukan</span>
                <x-form.input  label="" value="" livewire=""/>   
            </div>   
        </div>
    </div>
    <!-- Start Table search -->
    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
    
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
                </x-slot>
        </x-general.table>
          
    </div>
     <!-- End Table search -->

    <!-- Start Table Taksiran -->
    <div class="col-span-12 lg:col-span-12 xxl:col-span-12 mt-5">
        <div class="pb-4 text-blue-500 font-semibold text-lg ">
            <h1>Table Taksiran</h1>
        </div>
        <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-left bg-green-100" value="Tarikh" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Kod Hasil" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Butiran" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Rujukan" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Debit" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Kredit" sort="" livewire=""/>
                    <x-general.table-header class="text-left bg-green-100" value="Baki" sort="" livewire=""/>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>01/07/2015</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>61601</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>CP215</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>000251</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                    </tr>
                     <tr>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>01/07/2015</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>61601</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>CP215</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>000251</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                    </tr>
                     <tr>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>01/07/2015</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>61601</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>CP215</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>000251</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                            <p>115.50</p>
                        </x-general.table-body>
                    </tr>
                </x-slot>
        </x-general.table>
          
    </div>
     <!-- End Table Taksiran -->
</div>
</div>

@endsection