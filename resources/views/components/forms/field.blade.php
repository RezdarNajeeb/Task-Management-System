@props(['label', 'name'])

<div class="mb-4 flex-grow w-full">
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-forms.error :$name />
    </div>
</div>