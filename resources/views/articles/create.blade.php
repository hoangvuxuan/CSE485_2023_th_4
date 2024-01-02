<h1>Create New Article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <label for="content">Content:</label>
    <textarea name="content" id="content"></textarea>

    <button type="submit">Submit</button>
</form>