<h1>Add Category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit" class="btn btn-primary">Save</button>
</form>