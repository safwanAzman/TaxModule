<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="#">
        <div class="flex items-center">
            <span>Projection List For 2021</span>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
            <div class="flex justify-between">
                <a href="#" class="bg-blue-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer ml-2" wire:click="project()">
                    <svg class="w-6 h-6 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="text-white text-sm flex items-center">Generate</span>
                </a>
            </div>
        </div>

        <!-- Start Table search -->
        @if( isset($projections) )
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <x-general.table>
                <x-slot name="thead">
                    <x-general.table-header class="text-center" value="Bil" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="No Rujukan Invoice" sort="" livewire="" />
                    <x-general.table-header class="text-center" value="Urusniaga" sort="" livewire="" />
                    <x-general.table-header class="text-right" value="Amount Projected" sort="" livewire="" />
                </x-slot>
                <x-slot name="tbody">
                    @forelse ($projections as $projection)
                    <tr wire:click="transactionDetail({{$projection->receipt_group}})">
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $loop->iteration }}.</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $projection->bil_no }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-center text-gray-500 uppercase">
                            <p>{{ $projection->business_type }}</p>
                        </x-general.table-body>
                        <x-general.table-body colspan="" class="text-sm text-right text-gray-500 uppercase">
                            <p>{{ number_format($projection->total_paid_amount, 2) }}</p>
                        </x-general.table-body>
                    </tr>
                    @empty @endforelse
                </x-slot>
            </x-general.table>
            {{ $projections->links() }}
        </div>
        @endif
        <!-- End Table search -->
    </div>
</div>

<script>
    window.addEventListener('swal',function(e){Swal.fire(e.detail);});
</script>
