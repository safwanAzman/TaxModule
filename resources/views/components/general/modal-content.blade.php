<div x-show="{{$modalActive}}" style="display: none;" class="fixed inset-0 z-40 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="{{$modalActive}}"
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
        <div x-show="{{$modalActive}}"
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
                            {{$title}}
                        </h3>
                        
                        
                        <x-heroicon-o-x-circle @click="{{$modalActive}} = false" class="w-8 h-8 text-white cursor-pointer"/>
                    </div>
                    
                    {{$slot}}

                </div>
            </div>
        </div>
    </div>
</div>


