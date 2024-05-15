<?php
function login() {
    $message="";
    if (isset($_POST["send"])) {
        $record=readItem("felhasznalok","fmail","'$_POST[email]'");
        if ($record!==false){
            if (count($record)==0) {
                $message= "$_POST[email] email címmel még nem regisztráltak";
            }
            else {
                $salt=$record[0]["fsalt"];
                $pw_crypt_post=crypt($_POST["pw"],"$6$".$salt."$");
                $pw_crypt="$6$".$salt."$".$record[0]["fpw"];
                if ($pw_crypt_post==$pw_crypt) {
                    $message= "Belépés sikeres";
                }
                else {
                    $message= "Nem megfelelő jelszó";
                }
            }
        }
        else {
            $message= "Sikertelen belépés, próbálja később!";
        }
    }
    return $message;
}
?>