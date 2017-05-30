
<?php
	ob_start();
    session_start();
    require_once 'Database.php';
    
	if(isset($_POST['sign'])){

		$u_name=addslashes($_POST['username']);
		$psw=addslashes($_POST['password']);
		$pos=addslashes($_POST['position']);
		$bn=addslashes($_POST['branch']);
		$co=addslashes($_POST['college']);
		$da=addslashes($_POST['date']);
		$em=addslashes($_POST['email']);
		$cn=addslashes($_POST['con']);

		$query="insert into signup values('$u_name','$psw','$pos','$bn','$co','$da','$em','$cn')";
		if(mysqli_query($conn, $query)){
                 $error = 1;
            } else {
        $error = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
	}
	if(isset($_POST['login-submit'])){

		$u_name=addslashes($_POST['username']);
		$psw=addslashes($_POST['password']);
		
      
      $sql = "SELECT * FROM signup WHERE username = '$u_name' or email='$u_name' and password = '$psw'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         
         $error=1;
      }else {
         $error = "Your Login Name or Password is invalid";
      }
	}
	if($error==1){
		header("location:home.php");
	}
	else{
		echo $error;
	}

?>