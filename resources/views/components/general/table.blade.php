<div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
        <thead>
            <tr>
                {{ $thead }}
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{ $tbody }}
        </tbody>
    </table>
    <div class="border-t border-gray-200">
        <div class="mx-2 my-2">
            {{ $slot }}
        </div>
    </div>
</div>
     
