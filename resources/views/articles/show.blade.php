<x-layout>
    <h1>dettaglio di {{ $article->title }}</h1>
    <a href="{{ route('edit', compact('article')) }}">Modifica</a>
    <form action="{{ route('destroy', compact('article')) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" href="">Elimina</button>
    </form>

</x-layout>
