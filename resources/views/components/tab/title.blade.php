
    <nav class="flex flex-col sm:flex-row">
        <div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 cursor-pointer" x-on:click.prevent="active = {{ $name }}" x-bind:class="{'text-blue-500 border-b-4 font-medium border-blue-500 ': active === {{ $name }} }">
            <div class="flex">
                {{ $slot }}
            </div>
        </div>
     </nav>

