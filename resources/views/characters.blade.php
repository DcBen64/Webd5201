<x-layout>
    <h1>Main Characters</h1>
    <ul>
        @foreach ($characters as $character)
        <article>
        <li>
            <a href="/characters/{{ $character->slug }}">
                <h2>{{ $character->title }}</h2>
            </a>
            <p>
                By  <a href="/authors/{{ $character->author->username }}">{{ $character->author->name }}</a>
                in <a href="/categories/{{ $character->category->slug }}">{{ $character->category->name }}</a>
            </p>
            <p>{{ $character->excerpt }}</p>
        </li>
        </article>
        @endforeach
    </ul>
</x-layout>
