<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
</br>
<form method="post" action="reg.php">
	<center>
	 <table border="1">
		<tr>
			<td align="center" width="600" height="50"></br><font size="6"><b>Registration</b></font></br></br></br></td>			
		</tr>
	 </table>
	 <table border="1">
		<tr>
			<td width="120" height="30">&nbsp Name :</td>
			<td width="419" height="30">&nbsp &nbsp<input size="30" name="name" type="text" value=""></td>
			<td width="50" height="30"></td>
		</tr>
		
		 <table border="1">
		<tr>
			<td width="120" height="30">&nbsp password :</td>
			<td width="419" height="30">&nbsp &nbsp<input size="30" name="password" type="password" value=""></td>
			<td width="50" height="30"></td>
		</tr>
		
		<tr>
            <td width="120" height="30">&nbsp User Type :</td>
			<td width="419" height="30">&nbsp &nbsp
				        <input name="usertype" type="radio" value="Admin">Admin
						<input name="usertype" type="radio" value="Shopkeeper">Shopkeeper</td>
						
			<td width="50" height="30"></td>			
		</tr>
		
		<tr>
            <td width="120" height="30">&nbsp Email :</td>
			<td width="419" height="30">&nbsp &nbsp<input size="30" name="email" type="text" value="">&nbsp<abbr title="hint: sample@example.com"><b>i</b></abbr></td>
			<td width="50" height="30"></td>			
		</tr>
		<tr>
            <td width="120" height="30">&nbsp Gender :</td>
			<td width="419" height="30">&nbsp &nbsp
				        <input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other</td>
			<td width="50" height="30"></td>			
		</tr>
		<tr>
            <td width="120" height="30">&nbsp Date Of Birth :</td>
			<td width="419" height="30">&nbsp &nbsp
				        <input type="text" name="dob"> -
						
						</td>
			<td width="50" height="30"></td>			
		</tr>
		<tr>
            <td width="120" height="30">&nbsp Blood Group :</td>
			<td width="419" height="30">&nbsp &nbsp
                    <select name="bloodGroup">
                    	<option value="Select">Select</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="O">O</option>
                    </select>
			<td width="50" height="30"></td>			
		</tr>
		<tr>
            <td width="120" height="30">&nbsp Degree :</td>
			<td width="419" height="30">&nbsp &nbsp
				    <input type="checkbox" name ="degree" value = "SSC "/>SSC
                    <input type="checkbox" name ="degree" value = "HSC"/>HSC
                    <input type="checkbox" name ="degree" value = "BSc "/>BSc
                    <input type="checkbox" name ="degree" value = "MSc "/>MSc
			<td width="50" height="30"></td>			
		</tr>
		
		
		
			<table border="1">
			<tr>
				<td width="600" height="30"></td>
			</tr>

			<tr>
				<td align="right" width="600" height="50">
					<input type="submit" value="Submit" name="mySubmit">&nbsp &nbsp &nbsp
		            <input type="reset">&nbsp &nbsp

		        </td>
			</tr>
		

	    </table>
	</center>
</form>
</body>
</html>


<?php
  $conn = mysqli_connect("localhost", "root", "", "imsdb");
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if(!isset($_POST['email']))
	 { 
        echo "Please Enter email"."<br/>"; 
     } 
     else
     {
     	$email 	= $_POST['email'];
     	
     } 
if(!isset($_POST['gender']))
	 { 
        echo "No Gender as selected"."<br/>"; 
     } 
     else
     {
     	$gender 	= $_POST['gender'];
     	
     }
     if(!isset($_POST['degree']))
	 { 
        echo "No Degree as selected"."<br/>"; 
     } 
     else
     {
     	$degree 	= $_POST['degree'];
     	
     }

     if($_POST['bloodGroup'] == "Select")
     {
     echo "Please select a Blood Group"."<br/>";
     }
     else
     {
      $bloodGroup = $_POST['bloodGroup'];
      
     }
	

	if(!empty($_POST['usertype']))
			{ 
					
				$userType = $_POST['usertype'];
			}
		else
		{
			echo " Usertype Field Cannot be Empty"."<br/>";
		}

		if(!empty($_POST['degree']))
			{ 
					
				$userType = $_POST['degree'];
			}
		else
		{
			echo " Degree Field Cannot be Empty"."<br/>";
		}
		$name = $_POST['name'];
		$password = $_POST['password'];
	   $dob = $_POST['dob'];
		
			
			   $sql="INSERT INTO `userinfo` (`Id`, `username`, `email`, `password`, `type`, `gender`, `dob`, `blood`, `Degree`) VALUES (NULL, '$name', '$email', '$password', '$userType', '$gender', '$dob', '$bloodGroup', '$degree');";
			   if(mysqli_query($conn, $sql))
			  {
		        echo "New User records updated successfully";
		       }

	    

		
        
		    
$conn->close();

?> 

