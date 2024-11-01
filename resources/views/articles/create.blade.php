<x-layout>
    <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title">
        <label for="description">Descrizione:</label>
        <textarea type="text" name="description" id="description"></textarea>
        @foreach ($categories as $category)
            <label for="{{ $category['name'] }}">{{ $category['name'] }}</label>
            <input type="checkbox" name="categories[]" id="{{ $category->id }}" value="{{ $category->id }}">
        @endforeach
        <button type="submit">Inserisci</button>

    </form>
</x-layout>
