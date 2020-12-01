<li class="relative px-6 py-3" x-data="{ {{$active}}: false }">
    <button 
    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-100 dark:hover:text-gray-200"
    x-on:click="{{$active}} = !{{$active}}"
    >
        <span class="inline-flex items-center">
            <x-heroicon-o-desktop-computer class="w-5 h-5"/>
            <span class="ml-4">{{$title}}</span>
        </span>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  class="ml-1 transform inline-block fill-current text-gray-500 w-6 h-6 rotate-90" :class="{'rotate-360': {{$active}}}"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
    </button>

    <div x-show.transition="{{$active}}" >
        <ul
            x-transition:enter="transition-all ease-in-out duration-300"
            x-transition:enter-start="opacity-25 max-h-0"
            x-transition:enter-end="opacity-100 max-h-xl"
            x-transition:leave="transition-all ease-in-out duration-300"
            x-transition:leave-start="opacity-100 max-h-xl"
            x-transition:leave-end="opacity-0 max-h-0"
            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-900 dark:text-gray-400 dark:bg-gray-900"
            aria-label="submenu"
        >

        {{$slot}}

        </ul>
    </div>
</li>