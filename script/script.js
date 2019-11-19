/*side navbar*/

function openNav() {
	document.getElementById("mySidenav").style.width = "550px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
	dropdown[i].addEventListener("click", function () {
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
		} else {
			dropdownContent.style.display = "block";
		}
	});
}


function myAccFunc() {
	var x = document.getElementById("demoAcc");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFuncc() {
	var x = document.getElementById("demoAccc");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc2() {
	var x = document.getElementById("demoAcc2");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc3() {
	var x = document.getElementById("demoAcc3");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc4() {
	var x = document.getElementById("demoAcc4");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc5() {
	var x = document.getElementById("demoAcc5");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc6() {
	var x = document.getElementById("demoAcc6");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}

function myAccFunc7() {
	var x = document.getElementById("demoAcc7");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-white";
	} else {
		x.className = x.className.replace(" w3-show", "");
		x.previousElementSibling.className =
			x.previousElementSibling.className.replace(" w3-white", "");
	}
}


/*Slide Show*/

var slideIndex=0;
showSlides();

function showSlides(){
	var i;
	var slides=document.getElementsByClassName("images");
	
	for(i=0;i<slides.length;i++){
		slides[i].style.display="none";
	}
	
	if(slideIndex==slides.length){
		slideIndex=0;
	}
	
	slides[slideIndex].style.display="block";
	
	slideIndex++;
	
	setTimeout(showSlides,8000);
}


