<h2>Tour List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($tours as $tour): ?>
    <tr>
        <td><?php echo $tour->name; ?></td>
        <td><?php echo $tour->description; ?></td>
        <td><?php echo $tour->price; ?></td>
        <td>
            <a href="index.php?url=tours/show&id=<?php echo $tour->id; ?>">View</a>
            <a href="index.php?url=tours/edit&id=<?php echo $tour->id; ?>">Edit</a>
            <form action="index.php?url=tours/delete" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $tour->id; ?>">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>