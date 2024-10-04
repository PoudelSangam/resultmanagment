<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
				var email= $("#email").val();
				var password= $("#password").val();
			

			$.ajax({
				url:"T_login_process.php",
				type:"POST",
				data:{email:email, password:password,submit:"submit"},
				success:function(dataa){
					if(dataa=='Success')
					{
						window.location="T_home.php"
					}
					else
					{
						$("#demo").html(dataa);
					}
				
				}
			})
			
			})
		});

	</script>