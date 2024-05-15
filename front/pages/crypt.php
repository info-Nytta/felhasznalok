<h1>Szöveg titkosítása</h1>

<form method="POST">
    <label>Szöveg:</label><br>
    <input type="text" name="szoveg"><br>
    <input type="submit" value="Titkosítás">
</form>


<?php
// DES 
// Hash függvények
// Egyirányú: MD, SHA   - (MD5, SHA-1) - SHA-256, SHA-512

if (isset($_POST["szoveg"])) {
    $text=$_POST["szoveg"];
    echo "Eredeti: $text"."<br>";
    // elavultak
    echo sha1($text)."<br>";
    echo md5($text)."<br>";    
    echo crypt($text,"aa")."<br>";              // DES - fix 2 karakterrel
    echo crypt($text,"ab")."<br>";              // ua
    echo crypt($text,"$1$12345678$")."<br>";    // md5-nek felel meg max 8 karakterrel
    echo crypt($text,"$1$0abc$")."<br>";
		// ajánlott inkább ez
    echo crypt($text,"$5$0abc$")."<br>";        // SHA-256-nak felel meg max 16 karakterrel 
    echo crypt($text,"$6$0abc$")."<br>";        // SHA-512-nek felel meg max 16 karakterrel
    // ---------
}
?>
