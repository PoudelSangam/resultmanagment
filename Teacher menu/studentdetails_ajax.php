
        <script src="jquery.js"></script>
        <script type="text/javascript">
			


        $(document).ready(function(){

			$("button").on("click",function()
			{
                for(var i=0;i<=12;i++)
                {
                
                if(this.id==i)
                {
                    var data=i;
                    $(this).css('background-color','orange');  
                }

                if(this.id!=data)
                {
                    $("button").css('background-color','#4CAF50'); 
                }

               
              }
                 
            // $("#showdata").html(data);
    
        	$.ajax({
				url:"Show_student_data.php",
				type: "POST",
				data: {class:data},
				success : function(dataa){
					$("#showdata").html(dataa);
				}
			})
			
			})

		});
	
        </script>
    
   