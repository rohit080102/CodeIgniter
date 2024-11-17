<h2>Login</h2>
<?php echo $this->session->flashdata('error'); ?>
<form method="post" action="<?php echo site_url('user/login_user'); ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<a href="<?php echo site_url('user/register'); ?>">Register</a>
