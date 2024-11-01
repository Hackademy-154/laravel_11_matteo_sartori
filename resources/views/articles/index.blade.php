<x-layout>
    @foreach ($articles as $article)
        <h1>{{ $article->title }}</h1>
        <a href="{{ route('show', compact('article')) }}">dettaglio</a>
    @endforeach
    <a href="{{ route('create') }}">Crea</a>
</x-layout>
