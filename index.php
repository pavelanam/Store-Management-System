
		
<html>
  <head>
        
		<script type="text/javascript">
		
		function loadData(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'search.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			var abc = "key="+document.getElementById('search').value;
			xmlHttp.send(abc);

			xmlHttp.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					//alert(this.responseText);
					document.getElementById('result').innerHTML = this.responseText;
					//alert(this.responseText);
				}
			}

		}

		function abc(data){

			document.getElementById('search').value=data;
			document.getElementById('result').innerHTML="";
		}

	</script>

     
  </head>
  <body>
       <h2>Store Management System</h2> 
	    </br>
			<fieldset>
				 <div align='right'><a href='login.html'> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='reg.php'> Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascriptValidation.html'> JS Registration</a>&nbsp;&nbsp;</div>
				   
			</fieldset>
			<br/>
			<br/>
			<center>
			<div>
			
				<input type="text" id='search' name="" onkeyup="loadData()">
				<input type="button"  name="" value="Search" >

		    </div>
			<div id="result">
			
		    </div>
			</center>
			
			
	   
  </body>
</html>


			