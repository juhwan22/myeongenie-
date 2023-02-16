function moveScroll(position) {
	$('html, body').animate({
		scrollTop: parseInt($(position).offset().top)
	}, 500);
}



var modal1 = document.querySelector(".modal_wrap1");
var trigger1 = document.querySelector("#modal_btn1");
var closeButton1 = document.querySelector(".modal_close1");

var modal2 = document.querySelector(".modal_wrap2");
var trigger2 = document.querySelector("#modal_btn2");
var closeButton2 = document.querySelector(".modal_close2");

var modal3 = document.querySelector(".modal_wrap3");
var trigger3 = document.querySelector("#modal_btn3");
var closeButton3 = document.querySelector(".modal_close3");

var modal4 = document.querySelector(".modal_wrap4");
var trigger4 = document.querySelector("#modal_btn4");
var closeButton4 = document.querySelector(".modal_close4");

var modal5 = document.querySelector(".modal_wrap5");
var trigger5 = document.querySelector("#modal_btn5");
var closeButton5 = document.querySelector(".modal_close5");

var modal6 = document.querySelector(".modal_wrap6");
var trigger6 = document.querySelector("#modal_btn6");
var closeButton6 = document.querySelector(".modal_close6");

var modal7 = document.querySelector(".modal_wrap7");
var trigger7 = document.querySelector("#modal_btn7");
var closeButton7 = document.querySelector(".modal_close7");

var modal8 = document.querySelector(".modal_wrap8");
var trigger8 = document.querySelector("#modal_btn8");
var closeButton8 = document.querySelector(".modal_close8");

var modal9 = document.querySelector(".modal_wrap9");
var trigger9 = document.querySelector("#modal_btn9");
var closeButton9 = document.querySelector(".modal_close9");

var modal10 = document.querySelector(".modal_wrap10");
var trigger10 = document.querySelector("#modal_btn10");
var closeButton10 = document.querySelector(".modal_close10");

//console.log(modal);

function toggleModal() {
    modal_wrap1.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal_wrap1) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

//console.log(modal);

function toggleModal2() {
    modal_wrap2.classList.toggle("show-modal");
}

function windowOnClick2(event) {
    if (event.target === modal_wrap2) {
        toggleModal2();
    }
}

trigger2.addEventListener("click", toggleModal2);
closeButton2.addEventListener("click", toggleModal2);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick2);

//console.log(modal);

function toggleModal3() {
    modal_wrap3.classList.toggle("show-modal");
}

function windowOnClick3(event) {
    if (event.target === modal_wrap3) {
        toggleModal3();
    }
}

trigger3.addEventListener("click", toggleModal3);
closeButton3.addEventListener("click", toggleModal3);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick3);

//console.log(modal);

function toggleModal4() {
    modal_wrap4.classList.toggle("show-modal");
}

function windowOnClick4(event) {
    if (event.target === modal_wrap4) {
        toggleModal4();
    }
}

trigger4.addEventListener("click", toggleModal4);
closeButton4.addEventListener("click", toggleModal4);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick4);

//console.log(modal);

function toggleModal5() {
    modal_wrap5.classList.toggle("show-modal");
}

function windowOnClick5(event) {
    if (event.target === modal_wrap5) {
        toggleModal5();
    }
}

trigger5.addEventListener("click", toggleModal5);
closeButton5.addEventListener("click", toggleModal5);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick5);

//console.log(modal);

function toggleModal6() {
    modal_wrap6.classList.toggle("show-modal");
}

function windowOnClick6(event) {
    if (event.target === modal_wrap6) {
        toggleModal6();
    }
}

trigger6.addEventListener("click", toggleModal6);
closeButton6.addEventListener("click", toggleModal6);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick6);

//console.log(modal);

function toggleModal7() {
    modal_wrap7.classList.toggle("show-modal");
}

function windowOnClick7(event) {
    if (event.target === modal_wrap7) {
        toggleModal7();
    }
}

trigger7.addEventListener("click", toggleModal7);
closeButton7.addEventListener("click", toggleModal7);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick7);

//console.log(modal);

function toggleModal8() {
    modal_wrap8.classList.toggle("show-modal");
}

function windowOnClick8(event) {
    if (event.target === modal_wrap8) {
        toggleModal8();
    }
}

trigger8.addEventListener("click", toggleModal8);
closeButton8.addEventListener("click", toggleModal8);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick8);

//console.log(modal);

function toggleModal9() {
    modal_wrap9.classList.toggle("show-modal");
}

function windowOnClick9(event) {
    if (event.target === modal_wrap9) {
        toggleModal9();
    }
}

trigger9.addEventListener("click", toggleModal9);
closeButton9.addEventListener("click", toggleModal9);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick9);

//console.log(modal);

function toggleModal10() {
    modal_wrap10.classList.toggle("show-modal");
}

function windowOnClick10(event) {
    if (event.target === modal_wrap10) {
        toggleModal10();
    }
}

trigger10.addEventListener("click", toggleModal10);
closeButton10.addEventListener("click", toggleModal10);
//cancel.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick10);
