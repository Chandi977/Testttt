<h2>Admin Login</h2>
<?php if (isset($_GET['error'])): ?>
<p style="color:red;"><?php echo $_GET['error']; ?></p>
<?php endif; ?>
<form action="index.php?admin&url=admin/authenticate" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Login</button>
</form>