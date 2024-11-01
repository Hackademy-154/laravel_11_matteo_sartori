<x-layout>
    <form action="{{ route('update', compact('article')) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" value="{{ $article->title }}">
        <label for="description">Descrizione:</label>
        <textarea type="text" name="description" id="description">{{ $article->description }}</textarea>
        @foreach ($categories as $category)
            <label for="{{ $category['name'] }}">{{ $category['name'] }}</label>
            <input type="checkbox" name="categories[]" id="{{ $category->id }}" value="{{ $category->id }}"
                {{ isset($article) && $article->categories->contains($category->id) ? 'checked' : '' }}>
        @endforeach
        <button type="submit">Modifica</button>
    </form>
</x-layout>
