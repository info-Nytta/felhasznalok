<?php
    $message=reg();
?>

<style>
    form img:hover {cursor:pointer}
</style>

<h1>Regisztráció</h1>
<p>
    <?php echo $message; ?>
</p>
<form method="POST" action="" onsubmit="return equal();">
    <label>Név:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <label>Jelszó:</label><br>
    <input type="password" name="pw" id="pw" required onkeyup='equal();'>
    <img src="./front/img/eye1.png" id="eye" onclick="pw_see();"><br>
    <label>Jelszó mégegyszer:</label><br>
    <input type="password" name="pw2" id="pw2" required onkeyup='equal();'>
    <img src ='./front/img/nonequal.png' id='pipa'><br>
    <input type="submit" name="send" value="Regisztrálok">
</form>

