<script src="jquery.js"></script>
	<script type="text/javascript">
        function printError(elemId, error)
         {
    		$(elemId).html(error);
		 }

		$(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
                var name=$("#name").val();
                var math = $("#Math").val();
                var nepali=$("#Nepali").val();
                var physics_th=$("#PHYSIC_th").val();
                var physics_pr=$("#PHYSIC_pr").val();
                var chemistry_th= $("#Chemistry_th").val();
                var chemistry_pr = $("#Chemistry_pr").val();
                var wdd_th=$("#WDD_th").val();
                var wdd_pr=$("#WDD_pr").val();
                var dccn_th=$("#DCCN_th").val();
                var dccn_pr=$("#DCCN_pr").val();
                var Rollnumber=$("#Rollnumber").val();

                var nameErr=mathErr=nepaliErr=physics_thErr=physics_prErr=chemistry_thErr=
                chemistry_prErr=wdd_thErr=wdd_prErr=dccn_thErr=dccn_prErr=RollnumberErr= true;
                
    
    
    if(name=="")
    {
        printError("#nameErr", "*Please enter Student Name");
    }
    else 
    {
        var regex = /^[a-zA-Z\s]/;                
        if(regex.test(name) === false) {
            printError("#nameErr", "*Please enter a valid Student Name");
        } else {
            printError("#nameErr", "");
            nameErr = false;
        }
    }

    if( Rollnumber=="") {
        printError("#RollnumberErr", "*Please enter Rollnumber");
    }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(Rollnumber) === false)
         {
            printError("#RollnumberErr", "*Please enter a valid Rollnumber");
         } 
         else
        {
            printError("#RollnumberErr", "");
            RollnumberErr = false;
        }
    }

   

    if( math == "") {
        printError("#mathErr", "*Please enter marks");
    }
     else if(math<0 || math>100)
    {
        printError("#mathErr","Please enter valid marks");

    } 
    else if (math=='A' || math=="a" )
     {
         printError("#mathErr","");
         mathErr=false;

     }
    else {
        var regex = /^[0-9]/;
        if(regex.test(math) === false) {
            printError("#mathErr", "*Please enter a valid marks");
        } else{
            printError("#mathErr", "");
            mathErr = false;
        }
    }

    if( nepali == "") {
        printError("#nepaliErr", "*Please enter marks");
    }
     else if(nepali<0 || nepali>100)
    {
        printError("#nepaliErr","Please enter valid marks");

    } 
    else if (nepali=='A' || nepali=="a" )
     {
         printError("#nepaliErr","");
         nepaliErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(nepali) === false)
         {
            printError("#nepaliErr", "*Please enter a valid marks");
         } 
         else
        {
            printError("#nepaliErr", "");
            nepaliErr = false;
        }
    }


    if( physics_th == "") {
        printError("#physics_thErr", "*Please enter TH marks");
    }
     else if(physics_th<0 || physics_th>75)
    {
        printError("#physics_thErr","Please enter valid marks in TH");

    } 
    else if (physics_th=='A' || physics_th=="a" )
     {
         printError("#physics_thErr","");
         physics_thErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(physics_th) === false)
         {
            printError("#physics_thErr", "*Please enter a valid marks on TH");
         } 
         else
        {
            printError("#physics_thErr", "");
            physics_thErr = false;
        }
    }

     if( physics_pr == "") {
        printError("#physics_prErr", "*Please enter PR marks");
    }
     else if(physics_pr<0 || physics_pr>25)
    {
        printError("#physics_prErr","Please enter valid marks in PR");

    } 
    else if (physics_pr=='A' || physics_pr=="a" )
     {
         printError("#physics_prErr","");
         physics_prErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(physics_pr) === false)
         {
            printError("#physics_prErr", "*Please enter a valid marks in PR");
         } 
         else
        {
            printError("#physics_prErr", "");
            physics_prErr = false;
        }
    }

     if( chemistry_th== "") {
        printError("#chemistry_thErr", "*Please enter TH marks");
    }
     else if(chemistry_th<0 || chemistry_th>75)
    {
        printError("#chemistry_thErr","Please enter valid marks in TH");

    } 
    else if (chemistry_th=='A' || chemistry_th=="a" )
     {
         printError("#chemistry_thErr","");
         chemistry_thErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(chemistry_th) === false)
         {
            printError("#chemistry_thErr", "*Please enter a valid marks in TH");
         } 
         else
        {
            printError("#chemistry_thErr", "");
            chemistry_thErr = false;
        }
    }


     if( chemistry_pr== "") {
        printError("#chemistry_prErr", "*Please enter PR marks");
    }
     else if(chemistry_pr<0 || chemistry_pr>25)
    {
        printError("#chemistry_prErr","Please enter valid marks in PR");

    } 
    else if (chemistry_pr=='A' || chemistry_pr=="a" )
     {
         printError("#chemistry_prErr","");
         chemistry_prErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(chemistry_pr) === false)
         {
            printError("#chemistry_prErr", "*Please enter a valid marks in PR");
         } 
         else
        {
            printError("#chemistry_prErr", "");
            chemistry_prErr = false;
        }
    }


     if( wdd_th== "") {
        printError("#wdd_thErr", "*Please enter TH marks");
    }
     else if(wdd_th<0 || wdd_th>50)
    {
        printError("#wdd_thErr","Please enter valid marks in TH");

    } 
    else if (wdd_th=='A' || wdd_th=="a" )
     {
         printError("#wdd_thErr","");
         wdd_thErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(wdd_th) === false)
         {
            printError("#wdd_thErr", "*Please enter a valid marks in TH");
         } 
         else
        {
            printError("#wdd_thErr", "");
            wdd_thErr = false;
        }
    }

     if(wdd_pr=== "") {
        printError("#wdd_prErr", "*Please enter PR marks");
    }
     else if(wdd_pr<0 || wdd_pr>50)
    {
        printError("#wdd_prErr","Please enter valid marks in PR");

    } 
    else if (wdd_pr=='A' || wdd_pr=="a" )
     {
         printError("#wdd_prErr","");
         wdd_prErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(wdd_pr) === false)
         {
            printError("#wdd_prErr", "*Please enter a valid marks in PR");
         } 
         else
        {
            printError("#wdd_prErr", "");
            wdd_prErr = false;
        }
    }

     if( dccn_th== "") {
        printError("#dccn_thErr", "*Please enter TH marks");
    }
     else if(dccn_th<0 || dccn_th>50)
    {
        printError("#dccn_thErr","Please enter valid marks in TH");

    } 
    else if (dccn_th=='A' || dccn_th=="a" )
     {
         printError("#dccn_thErr","");
         dccn_thErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(dccn_th) === false)
         {
            printError("#dccn_thErr", "*Please enter a valid marks in TH");
         } 
         else
        {
            printError("#dccn_thErr", "");
            dccn_thErr = false;
        }
    }

     if( dccn_pr== "") {
        printError("#dccn_prErr", "*Please enter PR marks");
    }
     else if(dccn_pr<0 || dccn_pr>50)
    {
        printError("#dccn_prErr","Please enter valid marks in PR");

    } 
    else if (dccn_pr=='A' || dccn_pr=="a" )
     {
         printError("#dccn_prErr","");
         dccn_prErr=false;
     }
    else 
    {
        var regex = /^[0-9]/;
        if(regex.test(dccn_pr) === false)
         {
            printError("#dccn_prErr", "*Please enter a valid marks in PR");
         } 
         else
        {
            printError("#dccn_prErr", "");
            dccn_prErr = false;
        }
    }
    
    if(nameErr|| mathErr||nepaliErr || physics_thErr||physics_prErr||chemistry_thErr||chemistry_prErr||wdd_prErr||wdd_thErr||dccn_prErr||dccn_thErr||RollnumberErr=== true) 
    {
               
                return false;


      
    } 
    else{
                var classes= $("#classes option:selected").val();
                var years= $("#Years option:selected").val();
                var terms= $("#terms option:selected").val();

                var hideError = function () {
                $("#Error").hide();
                $("#Success").hide();
                };
                

                $.ajax({
				url:"insert.php",
				type: "POST",
				data: {id:name, math:math, Nepali:nepali, PHYSIC_th:physics_th, PHYSIC_pr:physics_pr, Chemistry_th:chemistry_th, Chemistry_pr:chemistry_pr, WDD_th:wdd_th, WDD_pr:wdd_pr, DCCN_th:dccn_th, DCCN_pr:dccn_pr, RollNumber:Rollnumber, classes:classes, years:years, terms:terms,  submit:"submit"},
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
                        setTimeout(hideError,"4000");	
					}
					
				
				}
			})
    }
    

    





			

			
			
			})
		});

	</script>