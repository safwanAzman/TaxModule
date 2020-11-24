<div class="text-lg font-semibold text-blue-500">
    <h1>Senarai Cukai</h1>
</div>

<div class="my-4 flex justify-between">
    <div class="flex items-center w-full">
        <span class="mr-2 -mt-4 text-base text-gray-500">No.Rujukan </span>
        <x-form.input livewire="" label="" value=""/>
    </div>
</div> 

<div class="pt-5">
    <x-general.table>
        <x-slot name="thead">
            <x-general.table-header class="text-left" value="Urusniaga" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="No.Rujukan" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Jumlah Bil" sort="" livewire=""/>
            <x-general.table-header class="text-left" value="Amaun Bayar" sort="" livewire=""/>
            <x-general.table-header class="text-center" value="Tindakan" sort="" livewire=""/>  
        </x-slot>
        <x-slot name="tbody">
            
            <tr>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p>Cukai</p>
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p>C0020000014</p>
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p>1249.60</p>
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p>1249.60</p>
                </x-general.table-body> 

                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <div class="flex justify-center">
                        @include('pages.kutipan.maklumat-modal');

                        <a href="#" class="bg-red-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-2 rounded-full flex cursor-pointer ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white text-center">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                </x-general.table-body> 
            </tr> 
            
            <tr class="bg-orange-100">
                <x-general.table-body colspan="3" class="text-sm text-gray-500 uppercase">
                    
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p class="font-semibold">Bilangan Bil: <span class="font-semibold">1</span></p>
                </x-general.table-body>
                <x-general.table-body colspan="" class="text-sm text-gray-500 uppercase">
                    <p class="font-semibold">Jumlah Perlu Bayar: <span class="font-semibold">RM 1249.60</span></p>
                </x-general.table-body>        
            </tr>                       
        </x-slot>

        {{-- {{ $list->links('pagination::tailwind') }} --}}
    </x-general.table>
</div>  