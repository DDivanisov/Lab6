<h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required><br>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>