function hambimenu() {
	let menu=document.getElementById("menulista");
	if (menu.style.display=="block") {
		menu.style.display="none";
		document.getElementById("hambi").innerHTML="&#9776;";
	}
	else {
		menu.style.display="block";
		document.getElementById("hambi").innerHTML="X";
	}
}
