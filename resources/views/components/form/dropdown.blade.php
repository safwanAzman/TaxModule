<div>
    @if($label != "")
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            {{ $label }}
        </label>
    @endif

    <div class="mt-1 rounded-md shadow-sm mb-4">
        <select
         {{ $attributes }}
            @if ($value != "")
                wire:model.lazy="{{ $value }}"
            @endif

            class="form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
            wire:loading.attr='readonly'
            wire:loading.class="bg-gray-300"
            wire:target="submit"
        >
            @if($default == 'yes')
                <option value="" selected disabled>Please choose</option>
            @endif

            {{ $slot }}
        </select>
    </div>
    @if($value !="" && $errors->has($value)) <p class="text-sm text-red-600">Please choose</p> @endif
</div>