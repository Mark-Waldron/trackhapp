var menu_option = 0;

function myFunction() {
    
    //document.getElementById("demo").outerHTML = "Test JS File";
    
	var question = ['Hello, my name is TrackBot - what is your name?', 'Hey, what did you say you are called?', 'Hola, como te llamas?'];				  
	var questionRand = question[Math.floor(Math.random() * question.length)];
	var output = document.getElementById('demo');
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
	var output = document.getElementById("demo");
	    
    //counter to track responses
    menu_option++;
    
    //using this to test the inputs I'm getting within my code
    console.log(userRsp);
    console.log(menu_option);
    console.log(greetRand);
    console.log(output);
    //resp.innerHTML = userRsp;
    
    if (menu_option === 1)
    {
    	var check = userRsp.includes(" ");
    	if(check === true) //this is to catch if they've written for e.g. "my name is Cat"
    	//and not just a single word for their name!
    	{
    		output.innerHTML = 'Awesome, nice to meet you! How can I help?';
         	clearChatValues();   		
    	}
    	else{
    	 output.innerHTML = greetRand + userRsp + '! How can I help you today?';
         //document.getElementById("resp").innerHTML=userRsp;
         clearChatValues();
       	}
    }  
    if (userRsp === '1') //get the menu options changed to switch
    {
    	 userRsp = 'moments';
    	 output.innerHTML = 'You want help with ' + userRsp + '! What is the issue?';
         //document.getElementById("resp").innerHTML=userRsp;
         clearChatValues(); 
          
	}  
	
	/*var checkMoment = userRsp.includes("logging");
	if (checkMoment === true)
	{
		output.innerHTML = 'Sure, if ' + userRsp + ' is the issue, you can do x, y and z to resolve';
		clearChatValues(); 	
	}*/
	//I've replaced the above as a way to check for multiple terms
	//I want to port this to momentsHelp() and develop help section further
	if (['diary ', 'entry ', 'log ', 'logging '].indexOf(userRsp) >= 0) {
		output.innerHTML = 'Sure, if ' + userRsp + ' is the issue, you can do x, y and z to resolve';
		clearChatValues(); 
	}
	/*else if (userRsp != '1' && menu_option != 1) //this is just testing some error checking, will make more sophisticated
	{
	    output.innerHTML = 'Sorry, can you try again? If you choose an option we can take it from there!';
         //document.getElementById("resp").innerHTML=userRsp;
         clearChatValues(); 
	}*/
		  	             
}

//this function allows me to overwrite the values each time with new user input
function clearChatValues (){
         document.getElementById("response").value = " "; 
         userRsp = document.getElementById("response").value = null;
         output = document.getElementById("demo").value = " ";
         console.log("this is output: " + output);  
         console.log("this is usersp: " + userRsp);
}

function momentsHelp (){
//to get this working I need to move variables out of userResponse function so all functions can read
}