<?php
    $message=login();
?>

<style>
    form img:hover {cursor:pointer}
</style>

<h1>Belépés</h1>
<p>
    <?php echo $message; ?>
</p>
<form method="POST" action="" onsubmit="return equal();">
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <label>Jelszó:</label><br>
    <input type="password" name="pw" id="pw" required>
    <img src="./front/img/eye1.png" id="eye" onclick="pw_see();"><br>
    <input type="submit" name="send" value="Belépek">
</form>
