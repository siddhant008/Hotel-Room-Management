<?php
		$con=mysqli_connect("localhost","root","","nick")or die("not connect");	
			$username=$_POST['username'];
			$password=$_POST['password'];
			$password1=$_POST['password1'];
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$check=true;
			if($password == $password1)
			{
				
				if(!preg_match("/^[a-zA-Z ]*$/",$name))
				{
					echo "<script>
						alert('Name should only contain alphabets');
						window.location.href='signup.php';
						</script>";
	  				$check=false;
				}
				elseif( !(preg_match("/male/", $gender) or preg_match("/female/", $gender) or preg_match("/others/", $gender)) )
				{
					echo "<script>
						alert('Please select a gender');
						window.location.href='signup.php';
						</script>";
	  				$check=false;
				}
				if($check)
				{
					$q1=mysqli_query($con,"INSERT INTO signup values('$username', '$password', '$name', '$gender')");
					if($q1)
					{
						echo "<script>
						alert('successfully signed up');
						window.location.href='login.php';
						</script>";
					}
					else
					{
						echo "<script>
						alert('Username already taken');
						window.location.href='signup.php';
						</script>";
					}
				}
			}
			else
			{
				echo "<script>
						alert('Passwords do not match');
						window.location.href='signup.php';
						</script>";

			}
?>