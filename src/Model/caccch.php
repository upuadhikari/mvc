<?php 
if (isset($_POST['submit'])) {
 if (!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',$_POST['passwd1'])) {
	?>
	<small class="bg-danger">Please choose a Strong Password</small>
	<?php
	}
 else
    {
	if ($_POST['passwd1']!=$_POST['passwd2']) {
			?>
			<small class="bg-danger">Passwords do not match</small>
			<?php
		}
		
		
	else
	{		//DBMS
      $fname=$_POST['fname'];
      $address=$_POST['address'];
      $gender=$_POST['gender'];
      $email=$_POST['mail'];
      $passwd=$_POST['passwd1'];
      $dob=$_POST['dob'];



      $servername = "localhost";
      $username = "root";
      $password = NULL;
      $dbname = "project";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      $query=$conn->query("SELECT * FROM user");
      $u_id=($query->num_rows)+1;
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}


			// sql to insert
			$sql = "INSERT INTO user
				(userid,address,email,dob,gender,password,username)
				VALUES
				('', '$address','$email','$dob','$gender','$passwd','$fname')
			;";

			if ($conn->query($sql) === TRUE) {
			    $last_id = $conn->insert_id;
          echo"<br>";
          ?>
          <small class="bg-success">Account Created Successfully</small>
          
          
           <button type="submit" class="btn btn-primary" name="ok">Ok</button>
       
          <?php
          return;
			} 
			else {
			    echo "Error inserting: " . $conn->error;
			}

			$conn->close();
		}
	}
    }
   

?>