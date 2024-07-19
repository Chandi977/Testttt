<h2>Create Tour</h2>
<form action="index.php?url=tours/store" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" required>
    <button type="submit">Create</button>
</form>