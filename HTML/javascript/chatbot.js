var menu_option = 0;

function myFunction() {
    
    //document.getElementById("demo").outerHTML = "Test JS File";
    
	var question = ['Hello, my name is TrackBot - what is your name?', 'Hey, what did ya say you are called?', 'Hola, que tal?'];				  
	var questionRand = question[Math.floor(Math.random() * question.length)];
	var output = document.getElementById('output');
	output.innerHTML = questionRand;												

}
//response is id of input box 
//resp is id of paragraph under submit button
//respond is name out div, same as output is name of div

/* I want to generate random responses where possible and track here e.g. 
var greetArray[ 'Hi there ', 'Hello ', 'Greetings ', 'Wassup '];
var greetRand = greetArray[Math.floor(Math.random() * greetArray.length)];
*/

function userResponse(){
	
	//variables
	var greetArray = [ 'Hi there ', 'Hello ', 'Greetings ', 'Wassup '];
	var greetRand = greetArray[Math.floor(Math.random() * greetArray.length)];
    var userRsp = document.getElementById("response").value;
	var output = document.getElementById('output');
	    
    //counter to track responses
    menu_option++;
    
    //using this to test the inputs I'm getting within my code
    console.log(userRsp);
    console.log(menu_option);
    console.log(greetRand);
    console.log(output);
    //resp.innerHTML = userRsp;
    
    if (menu_option < 2)
    {
    	 output.innerHTML = greetRand + userRsp + '! How can I help you today?';
         //document.getElementById("resp").innerHTML=userRsp;
         document.getElementById("response").value = " ";         
    }
    
    if (userRsp == 'features' && menu_option >= 2)
    {
    	 output.innerHTML = 'You want help with ' + userRsp + '! What is the issue?';
         document.getElementById("resp").innerHTML=userRsp;
         document.getElementById("response").value = " ";   
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
