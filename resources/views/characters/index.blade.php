<x-layout>
    @include('characters._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($characters->count())
        <x-characters-grid :characters="$characters" />

            {{ $characters->links() }}


        @else
        <p class="text-center">No characters yet. Please check back later.</p>
        @endif





    </main>
</x-layout>
