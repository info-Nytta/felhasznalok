
    function pw_see(){
        pass=document.getElementById("pw");
        pass2=document.getElementById("pw2");
        eye=document.getElementById("eye");
        if (pass.type=="password"){
            eye.src="./front/img/eye0.png";
            pass.type="text";
            pass2.type="text";
        }
        else {
            eye.src="./front/img/eye1.png";
            pass.type="password";
            pass2.type="password";
        }
    }
    function equal(){
        pass=document.getElementById("pw");
        pass2=document.getElementById("pw2");
        if (pass.value!="" && pass.value==pass2.value) {
            document.getElementById('pipa').src  = './front/img/pipa.png';
			eq=true;
        }
        else {
            document.getElementById('pipa').src  = './front/img/nonequal.png';
			eq=false;
        }
        return eq;
    }