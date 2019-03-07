
<?php
$conn = mysqli_connect("localhost", "root", "", "imsdb");
 
if (!$conn) 
{
	 die("Connection failed: " . mysqli_connect_error());
}  
session_start();
$count=0;

    if(strlen($_POST["username"])==0)
    {
        echo "Id is required"."<br/>";
        $count=1;
    } 
	
    if(strlen($_POST["password"])==0)
    {
        echo "password is required"."<br/>";
        $count=1;
    }  
if($count==0)
{
	
$username=$_POST['username']; 
$password=$_POST['password'];
  

$sql = "SELECT * FROM userinfo where username='$username' and Password='$password'";
	
$result = mysqli_query($conn, $sql)or die(mysqli_error());   
 
$row=mysqli_fetch_assoc($result);

if( ($row['username'] == $username) )
{ 
    if($row['password'] == $password)
    {
   // echo "login successfully....";
    //echo "welcome ".$row['UserName'];
    //echo "<form action='form.html'><input type='submit' name='sbt' value='Logout'/>"; 
      
      $_SESSION["username"]=$row['username'];  
         if($row['type']=="admin") 
           {
             header("Location:adminHome.php" );
           } 
           else{
              header("Location:shopKeeper.php" );
           }      
     
    }  
    else 
    {   
       header("Location:login.html" );
       
    }
}
else
{  
  //echo "failed to login";
 header("Location:login.html");   
 
}	 

}
?>