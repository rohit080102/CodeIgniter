<h2>Register</h2>
<form method="post" action="<?php echo site_url('user/register_user'); ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
<a href="<?php echo site_url('user/login'); ?>">Login</a>
