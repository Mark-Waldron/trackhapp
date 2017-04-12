    function ImageSwapOn(Image) {
         Image.src = "./images/login_fade.png";
    }
    function ImageSwapOff(Image) {
        Image.src = "./images/login.png";
    }
    function ImageSwapOn1(Image) {
         Image.src = "./images/reg_fade.png";
    }
    function ImageSwapOff1(Image) {
        Image.src = "./images/reg.png";
    }
    
    //$('#login').click(function() {
    //$('#login_form').show();
//})

function showLogForm() { 

  document.getElementById("login_form").style.display="block";
}

function showRegForm() { 

  document.getElementById("reg_form").style.display="block";
}