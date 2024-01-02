<!-- resources/views/articles/index.blade.php -->

 

 
<h1>Articles</h1>
<a href="{{ route('articles.create') }}">Create New Article</a>
<ul>
    @foreach ($articles as $article)
    <li>
        <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
        <a href="{{ route('articles.edit', $article) }}">Edit</a>
        <form action="{{ route('articles.destroy', $article) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
 