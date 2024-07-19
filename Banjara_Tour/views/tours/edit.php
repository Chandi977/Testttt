<h2>Edit Tour</h2>
<form action="index.php?url=tours/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $tour->id; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $tour->name; ?>" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required><?php echo $tour->description; ?></textarea>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" value="<?php echo $tour->price; ?>" required>
    <button type="submit">Update</button>
</form>