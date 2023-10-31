@props(['characters'])
<x-character-featured-card :character="$characters[0]" />

@if ($characters->count() > 1)
<div class="lg:grid lg:grid-cols-6">
    @foreach ($characters->skip(1) as $character)
    <x-character-card :character="$character" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
    @endforeach
</div>

@endif
