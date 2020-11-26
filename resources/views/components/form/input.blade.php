<div>
    @if($label != "")
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            {{ $label }}
        </label>
    @endif

    <div class="mt-1 flex rounded-md shadow-sm mb-4">
        <input
            type="{{ $type }}" value="{{ $value }}" {{ $attributes }}
            {{ $livewire }}
            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}"
        >
    </div>
    @if($errors->has($value)) <p class="text-sm text-red-600">{{ $errors->first($value) }}</p> @endif
</div>