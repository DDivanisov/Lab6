<h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $post->description }}</textarea><br>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>