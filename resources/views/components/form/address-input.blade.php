<div {{ $attributes }}>
    <label class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 flex rounded-md shadow-sm">
        <input wire:model.lazy="{{ $value1 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value1)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value1)) <p class="text-sm text-red-600">{{ $errors->first($value1) }}</p> @endif

    <div class="mt-1 flex rounded-md shadow-sm">
        <input wire:model.lazy="{{ $value2 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value2)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value2)) <p class="text-sm text-red-600">{{ $errors->first($value2) }}</p> @endif

    <div class="mt-1 flex rounded-md shadow-sm">
        <input wire:model.lazy="{{ $value3 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value3)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
    </div>
    @if($errors->has($value3)) <p class="text-sm text-red-600">{{ $errors->first($value3) }}</p> @endif
</div>
<div class="mt-3 grid gap-2 lg:grid-cols-3 sm:grid-cols-1"> 
    <div>
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            Bandar
        </label>
        <div class="mt-1  flex rounded-md shadow-sm">
            <input wire:model.lazy="{{ $value4 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value4)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
        </div>
        @if($errors->has($value4)) <p class="text-sm text-red-600">{{ $errors->first($value4) }}</p> @endif
    </div>
    <div>
        <label class="block text-sm font-semibold leading-5 text-gray-700">
            Poskod
        </label>
        <div class="mt-1  flex rounded-md shadow-sm">
            <input wire:model.lazy="{{ $value5 }}" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 {{ ($errors->has($value5)) ? 'border-red-300 bg-red-50 text-red-900' : ''}}" wire:loading.attr='readonly' wire:loading.class="bg-gray-300" wire:target="submit">
        </div>
        @if($errors->has($value5)) <p class="text-sm text-red-600">{{ $errors->first($value5) }}</p> @endif
    </div>
    <x-form.negeri-dropdown label="Negeri" value="state_id">
        {{-- @foreach ($negeri as $item) --}}
            {{-- <option value="{{ $item->id }}" {{ ($condition == $item->id) ? 'selected': '' }}>{{ $item->description }}</option> --}}
            <option value=""></option> 
        {{-- @endforeach --}}
    </x-form.negeri-dropdown>
</div>