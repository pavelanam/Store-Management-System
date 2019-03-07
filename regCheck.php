<?php
	error_reporting(0);
		if(isset($_POST['mySubmit'])){

		
			if(!empty($_POST['name']))
	{ 
		
		$name = $_POST['name'];
		 if($name[0]=="a"||$name[0]=="h"||$name[0]=="I")
		        {
		         if(strlen($_POST['name'])>=2)
		            {
		              		 $name = $_POST['name'];
		                     echo "Name: ".$name."<br/;>";               
	                } 
	            else
	                {
	    	           echo " At Least Two Letters"."<br/>"; 
	                }
		           
		        }
		 else
	            {
	    	     echo "Start with a letter "."<br/>"; 
	            }

	}
	else
	{
		echo " Name Field Cannot be Empty"."<br/>";
	}
	if(!empty($_POST['password']))
			{ 
				
						if(strlen($_POST['password'])>=8)
							{
							  		$password = $_POST['password'];
							  
							} 
						else
							{
							   echo " At Least Eight Letters"."<br/>"; 
							}		
				

			}
		else
		{
			echo " Password Field Cannot be Empty"."<br/>";
		}
		

	if(!empty($_POST['email']))
	{     
		   $str =$_POST['email']; 
		   if (strspn($str,"@")<=0)
		           {
		           	    if(substr_count($str,"@")==1)
		           	      {
			                $str =$_POST['email']; 
							$arr_email=explode("@",$str);
							if (count($arr_email)>=2) 
							    {
									$last_index=$arr_email[count($arr_email)-1];
									$arr_email=explode(".",$last_index);
									if (count($arr_email)>=2) 
									   {
									   	     if ($arr_email[0]=="") 
									   	     {
									   	     	echo " Ivalid Email Address"."<br/>";
									   	     }
									   	     elseif ($arr_email[count($arr_email)-1]=="") 
									   	     {
									   	     	echo " Ivalid Email Address"."<br/>";
									   	     }
									   	     else
									   	     {
									   	     		if (stristr($str,".com")==".com") 
	        		                                       {
	        			                                        $email = $_POST['email'];
		                                                        echo "Email: ".$email."<br/>";

          		                                           }
	        		                                       else
	        		                                       {
	        		                                       	    echo "Invalid Email Address"."<br/>";
	        		                                       }
									   	     	
									   	     }

									   }
									else
							           {
								           echo " Ivalid Email Address"."<br/>";
							           }

								}
							else
							{
								echo " Ivalid Email Address"."<br/>";
							}

						}
						else
						{
						   echo " Ivalid Email Address"."<br/>";
						}					
				 }	
				 else
					{
					   echo " Ivalid Email Address"."<br/>";
					}
	     }
	else
	{
		echo " Email Field Cannot be Empty"."<br/>";
	}





	 if(!isset($_POST['gender']))
	 { 
        echo "No Gender as selected"."<br/>"; 
     } 
     else
     {
     	$gender 	= $_POST['gender'];
     	echo "Gender: ".$gender."<br/>";
     }
     if(!isset($_POST['degree']))
	 { 
        echo "No Degree as selected"."<br/>"; 
     } 
     else
     {
     	$degree 	= $_POST['degree'];
     	echo "Degree: ".$degree."<br/>";
     }

     if($_POST['bloodGroup'] == "Select")
     {
     echo "Please select a Blood Group"."<br/>";
     }
     else
     {
      $bloodGroup = $_POST['bloodGroup'];
      echo "Blood Group : ".$bloodGroup."<br/>";
     }
	

	if(!empty($_POST['day']))
	 { 
	 	if(!empty($_POST['month']))
	      {
	      	if(!empty($_POST['year']))
	      	{
	      		$day 		= $_POST['day'];
	            $month 		= $_POST['month'];
	            $year 		= $_POST['year'];
                if ( checkdate( $month, $day, $year ) === false )
                {
                      echo "Invalid date" ;
                }
                else
                {
                	echo "DOB: ".$day."/".$month."/".$year."<br/>";
                }
	      		
	      	}
	      	else
	        {
		        echo " DOB Field Cannot be Empty"."<br/>";
	        }

	      }
	      else
	      {
		       echo " DOB Field Cannot be Empty"."<br/>";
	      }
    
     } 
     else
	{
		echo " DOB Field Cannot be Empty"."<br/>";
	}
	if(!empty($_POST['usertype']))
			{ 
					
				$userType = $_POST['usertype'];
			}
		else
		{
			echo " Usertype Field Cannot be Empty"."<br/>";
		}
		
		
	
		if(!empty($name) &&!empty($password) &&!empty($email) &&!empty($gender) &&!empty($degree) &&!empty($bloodGroup) &&!empty($day) &&!empty($month) &&!empty($year) &&!empty($userType))
		{
			
			$myfile = fopen("user.txt", "a");
			$data = $name. "|". $password. "|". $userType. "|". $gender. "|". $degree."|".$bloodGroup. "|". $day. "|". $month. "|". $year."|". $email."\r\n";
			fwrite($myfile, $data);   
			fclose($myfile);
			header("location: login.php");
		}
        else
		{
			echo "Error";
			
		}
            
        }
			
?>