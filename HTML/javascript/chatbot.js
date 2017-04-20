function myFunction() {
    
    document.getElementById("demo").innerHTML = "Test JS File";
    
    var menu_option = 0;
	var question = '<h2>Hello, my name is TrackBot - what is your name?</h2>';				  

	var output = document.getElementById('output');
	output.innerHTML = question;												

}

function userResponse(){
    var userRsp = document.getElementById("response").value;
    console.log(Response);
    resp.innerHTML = userRsp;
    
    if (Response!=null)
    {
    	 userRsp ="Hello " + Response + "! How are you today?";
         document.getElementById("resp").innerHTML=userRsp;
    }
              

}

/*function bot() { 
    var response = document.getElementById("response").value;
    console.log(response);

    if (menu_option === 0) {
    output.innerHTML = '<h1>hello ' + response + '</h1>';
    document.getElementById("response").value = "";  
    question = '<h1>how old are you?</h1>';		
    setTimeout(timedQuestion, 2000);
    }

    else if (menu_option === 1) {
    output.innerHTML = '<h1>That means you were born in ' + (2017 - response) + '</h1>';
    document.getElementById("response").value = "";   
    question = '<h1>where are you from?</h1>';					      	
    setTimeout(timedQuestion, 2000);
    }   
}

function timedQuestion() {
    output.innerHTML = question;
}*/

//push enter key (using jquery)
//$(document).keypress(function(e) {
  //if (e.which == 13) {
  //  bot();																						
   // menu_option++;																	
//});

/*document.getElementById("response")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("responseBtn").click();
        bot();
        menu_option++;
    }
});*/
