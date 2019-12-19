

<?php 


if (isset($_POST['submit']))

{
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($email=="" || $password=="")

    {
    	echo " <font style='color : red; margin-left:35%;font-size:20px;'>pleass fill in this file </font";
    }

    else
        
    	if($email=="larebdahri7@gmail.com" &&$password=="larebdahri")
    	{
    		echo "<font style='color : green; margin-left:35%;font-size:20px;'>weelcome</font";
    	}
    	
    	else

    	{
    		echo "<font style='color : red; margin-left:35%;font-size:20px;'>Pleass try again</font>";
    	}
        
        
}

