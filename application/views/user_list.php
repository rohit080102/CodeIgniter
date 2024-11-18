<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>Saved User Information</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
			<th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user->id); ?></td>
            <td><?php echo htmlspecialchars($user->name); ?></td>
            <td><?php echo htmlspecialchars($user->email); ?></td>
			<td>
                <a href="<?php echo site_url('usercontroller/edit/' . $user->id); ?>">Edit</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?php echo site_url('usercontroller'); ?>">Add another user</a>
</body>
</html>
