<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User Information</h1>
    <form action="<?php echo site_url('usercontroller/update/' . $user->id); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($user->name); ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user->email); ?>" required><br><br>
        <input type="submit" value="Update">
        <a href="<?php echo site_url('usercontroller'); ?>">Cancel</a>
    </form>
</body>
</html>
