<x-layout>
    <article>

        <h1>{{$character->title }}</h1>
        <p>
            By  <a href="/authors/{{ $character->author->username }}">{{ $character->author->name }}</a>
                in <a href="/categories/{{ $character->category->slug }}">{{ $character->category->name }}</a>
        </p>
        <div class="body">{!! $character->body !!}</div>
    </article>
    <a href="/characters">Go Back</a>
</x-layout>
