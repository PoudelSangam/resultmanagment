
        <script src="jquery.js"></script>
        <script type="text/javascript">

			function printError(elemId, error) {
    				$(elemId).html(error);
					}

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

				  var usernameErr = lastnameErr= firstnameErr= passwordErr= phonenumberErr=ClassErr=rollErr=emailErr= true;

	
    
    
    if(username === "")
    {
        printError("#usernameErr", "*Please enter your username");
		

    }
        else 
         {
            var regex = /^[a-zA-Z\s]/;                
                if(regex.test(username) === false) {
                     printError("#usernameErr", "*Please enter a valid username");
                } else {
                    printError("#usernameErr", "");
                    usernameErr = false;
        }
    }

     if(password == "")
     {
        printError("#passwordErr", "*Please enter your password");
     }
     else {
            printError("#passwordErr", "");
            passwordErr = false;
        }


    if(firstname == "")
    {
        printError("#firstnameErr", "*Please enter your firstname");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(firstname) === false) {
            printError("#firstnameErr", "*Please enter a valid name");
        } else {
            printError("#firstnameErr", "");
            firstnameErr = false;
        }
    }


    if(lastname == "")
    {
        printError("#lastnameErr", "*Please enter your lastname");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lastname) === false) {
            printError("#lastnameErr", "*Please enter a valid lastname");
        } else {
            printError("#lastnameErr", "");
            lastnameErr = false;
        }
    }
    
    
    

    if(phonenumber == "") {
        printError("#phonenumberErr", "*Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phonenumber) === false) {
            printError("#phonenumberErr", "*Please enter a valid 10 digit mobile number");
        } else{
            printError("#phonenumberErr", "");
            phonenumberErr = false;
        }
    }

     if(email == "")
     {
        printError("#emailErr", "*Please enter your email address");
     }
     else {
            printError("#emailErr", "");
            emailErr = false;
        }


        if(Class == "")
     {
        printError("#ClassErr", "*Please enter your Class");
     }
     else if(Class<0 || Class>13)
    {
        printError("#ClassErr","Please enter valid Class");

    } 
    else {
        var regex = /^[0-9]+$/;
        if(regex.test(Class) === false) {
            printError("#ClassErr", "*Please enter a valid Class");
        } else{
            printError("#ClassErr", "");
            ClassErr = false;
        }
    }

     if(roll == "")
     {
        printError("#rollErr", "*Please enter your Roll number");
     }
     else
     {
      var regex = /^[0-9]/;
        if(regex.test(roll) === false) {
            printError("#rollErr", "*Please enter a valid Roll number");
        } 
        else{
            printError("#rollErr", "");
            rollErr = false;
        }
     }
	 if(phonenumberErr|| usernameErr||firstnameErr||lastnameErr||emailErr||ClassErr||rollErr||emailErr == true) 
    {
       return false;
    }
    else
    {
        var hideError = function () {
                $("#Error").hide();
                $("#Success").hide();
                };
                
        	$.ajax({
				url:"s_register_process.php",
				type: "POST",
				data: {username:username, password:password, firstname:firstname, lastname:lastname, phonenumber:phonenumber, email:email, Class:Class, roll:roll, submit:"submit"},
				success : function(dataa){
					if(dataa== 1)
					{
                        $(".success").css("display","block");
                        $("#Success").html("Success");
                        setTimeout(hideError,"3000");
                        $("form").trigger("reset");
                        
					}
					else
					{
                        $(".error").css("display","block");
                        $("#Error").html(dataa);
                        setTimeout(hideError,"3000");
                        $("#Error").html(dataa);		
					}
				
				}
			})
    }  
			
			})
		});
	
        </script>
    
   