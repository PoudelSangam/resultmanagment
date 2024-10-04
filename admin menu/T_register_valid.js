function printError(elemId, error) {
    document.getElementById(elemId).innerHTML =error;
}

function validateForm() {
     
    var username = document.Form.username.value;
    var password=document.Form.password.value;
    var firstname=document.Form.firstname.value;
    var lastname=document.Form.lastname.value;
    var email = document.Form.email.value;
    var phonenumber = document.Form.phonenumber.value;
    
    
    

    var usernameErr = lastnameErr= firstnameErr= passwordErr= phonenumberErr= true;
    
    
    if(username == "")
    {
        printError("usernameErr", "*Please enter your username");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]/;                
        if(regex.test(username) === false) {
            printError("usernameErr", "*Please enter a valid username");
        } else {
            printError("usernameErr", "");
            usernameErr = false;
        }
    }

     if(password == "")
     {
        printError("passwordErr", "*Please enter your password");
     }
     else {
            printError("passwordErr", "");
            passwordErr = false;
        }


    if(firstname == "")
    {
        printError("firstnameErr", "*Please enter your firstname");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(firstname) === false) {
            printError("firstnameErr", "*Please enter a valid name");
        } else {
            printError("firstnameErr", "");
            firstnameErr = false;
        }
    }


    if(lastname == "")
    {
        printError("lastnameErr", "*Please enter your lastname");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lastname) === false) {
            printError("lastnameErr", "*Please enter a valid lastname");
        } else {
            printError("lastnameErr", "");
            lastnameErr = false;
        }
    }
    
    
    

    if(phonenumber == "") {
        printError("phonenumberErr", "*Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phonenumber) === false) {
            printError("phonenumberErr", "*Please enter a valid 10 digit mobile number");
        } else{
            printError("phonenumberErr", "");
            phonenumberErr = false;
        }
    }

     if(email == "")
     {
        printError("emailErr", "*Please enter your email address");
     }
     else {
            printError("emailErr", "");
            emailErr = false;
        }

        


    
    
    
    if(phonenumberErr|| usernameErr||firstnameErr||lastnameErr||emailErr == true) 
    {
       return false;
      
    } 
    if(phonenumberErr|| usernameErr||firstnameErr||lastnameErr||emailErr == false)
    {  
        window.alert("Sucessfully Registered!");  
    }
    
};

