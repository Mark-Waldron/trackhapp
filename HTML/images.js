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

//names of functions as well as attributes should describe them
function showForm(elementId) { 
  //now we kick out both conditional we do not need them anymore

  //we hide both forms
  document.getElementById("login_form").style.display="none";
  document.getElementById("reg_form").style.display="none";

  //and then we simply show wanted one isn't that nicer and cleaner?
  document.getElementById(elementId).style.display="block";
}