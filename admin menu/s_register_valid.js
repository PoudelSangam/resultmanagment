
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
    var Class = document.Form.Class.value;
    var roll = document.Form.roll.value;

    
    

    var usernameErr = lastnameErr= firstnameErr= passwordErr= phonenumberErr=ClassErr=rollErr=emailErr= true;
    
    
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


        if(Class == "")
     {
        printError("ClassErr", "*Please enter your Class");
     }
     else if(Class<0 || Class>13)
    {
        printError("ClassErr","Please enter valid Class");

    } 
    else {
        var regex = /^[0-9]/;
        if(regex.test(Class) === false) {
            printError("ClassErr", "*Please enter a valid Class");
        } else{
            printError("ClassErr", "");
            ClassErr = false;
        }
    }

     if(roll == "")
     {
        printError("rollErr", "*Please enter your Roll number");
     }
     else
     {
      var regex = /^[0-9]/;
        if(regex.test(roll) === false) {
            printError("rollErr", "*Please enter a valid Roll number");
        } else{
            printError("rollErr", "");
            rollErr = false;
        }
     }
    


    
    
    
    if(phonenumberErr|| usernameErr||firstnameErr||lastnameErr||emailErr||ClassErr||rollErr||emailErr == true) 
    {
       return false;
    }
    if(phonenumberErr|| usernameErr||firstnameErr||lastnameErr||emailErr||ClassErr||rollErr||emailErr == false) 
    {
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        $(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
                var username=$("#username").val();
                var password=$("#password").val();
                var firstname=$("#firstname").val();
                var lastname=$("#lastname").val();
                var phonenumber=$("#phonenumber").val();
                var email=$("#email").val();
                var Class=$("#Class").val();
                var roll=$("#roll").val();
               

                // if(return validateForm()==FALSE)
                // {

			$.ajax({
				url:"s_register_process.php",
				type: "POST",
				data: {username:username, password:password, firstname:firstname, lastname:lastname, phonenumber:phonenumber, email:email, Class:Class, roll:roll, submit:"submit"},
				success : function(dataa){
					if(dataa=='Success')
					{
						$("#Success").html(dataa);
					}
                    else if(dataa=='Error')
					{
						$("#Error").html(dataa);
					}
					else
					{
                        $("#Error").html(dataa);	
					}
				
				}
			})
            // }
			
			})
		});
        
    
   
    }
    
    
}

