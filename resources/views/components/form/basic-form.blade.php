<form {{ $attributes }} wire:submit.prevent="{{ $action }}">
    <div>
        {{ $content }}
    </div>
    {{ $slot }}
</form>