<h1>Edit Article</h1>
<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $article->title }}">

    <label for="content">Content:</label>
    <textarea name="content" id="content">{{ $article->content }}</textarea>

    <button type="submit">Submit</button>
</form>