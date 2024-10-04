 <script src="jquery.js"></script>
        <script type="text/javascript">
			
        $(document).ready(function(e){

			$("#Login_1").on("click",function(e)
			{
				e.preventDefault();
                var Years = $("#Year option:selected").val();
               
    
        	$.ajax({
				url:"Show_Result.php",
				type: "POST",
				data: {Term:"1",Year:Years,submit:"submit"},
				success : function(dataa){
						$("#Term_1").html(dataa);
                         
				}
			})
			
			})
			

            $("#Login_2").on("click",function(e)
			{
				e.preventDefault();
				var Years = $("#Year option:selected").val();
    
        	$.ajax({
				url:"Show_Result.php",
				type:"POST",
				data:{Term:"2",Year:Years,submit:"submit"},
				success:function(dataa){
						$("#Term_2").html(dataa);  
                    }
			})
			
			})


            $("#Login_3").on("click",function(e)
			{
				e.preventDefault();
				var Years = $("#Year option:selected").val();
    
        	$.ajax({
				url:"Show_Result.php",
				type: "POST",
				data: {Term:"3",Year:Years,submit:"submit"},
				success : function(dataa){
                    $("#Term_3").html(dataa);

				
				}
			})
			
			})






		});
	
        </script>
       
   