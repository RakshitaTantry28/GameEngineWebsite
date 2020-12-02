//form validation


function validateform(){
    var uname = document.forms["registration_form"]["username"].value;
    var password = document.forms["registration_form"]["password"].value;
    var illegalChars = /^((?=.*[\W])(?=.*[!@#$%^&*]))$/; 
    var error = ""; 
    
    uname = uname.trim();
    if (uname.length < 8) {
        alert("Username should be more than 8 characters");
        return false;
    }

     
     if ((password.length < 7)) 
     { 
        error = "The password must be more than 7 characters \n"; 
         alert(error); 
        return false; 
     } 
      if ( (password.search(/[a-z]+/)==-1) || (password.search(/[0-9]+/)==-1)||(password.search(/[A-Z]+/)==-1) )
    { 
         error = "The password must contain at least one numeral and at least one capital character.\n"; 
         alert(error); 
        return false; 
     } 
     if(illegalChars.test(password)) 
    { 
         error = "The password contains illegal characters.\n"; 
        alert(error); 
         return false; 
    } 


}
