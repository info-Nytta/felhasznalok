<?php
function reg() {
    $message="";
    if (isset($_POST["send"])) {
        $record=readItem("felhasznalok","fmail","'$_POST[email]'");
        if ($record!==false){
            if (count($record)==0) {
                $field="fname,fmail,fpw,fsalt";
                // titkosítás
                $salt=salt();
                $pw_crypt=crypt($_POST["pw"],"$6$".$salt."$");
                // kód szétszedése
                $pw=explode("$", $pw_crypt)[3];            
                $value= "'$_POST[name]','$_POST[email]','$pw','$salt'";
                if (insertRecord("felhasznalok", $field, $value))
                    $message= "Sikeres regisztráció";
                else
                    $message= "Sikertelen regisztráció, próbálja később!";
            }
            else {
                $message= "$_POST[email] email címmel már regisztráltak";
            }
        }
        else {
            $message= "Sikertelen regisztráció, próbálja később!";
        }     
    }
    return $message;
}
?>