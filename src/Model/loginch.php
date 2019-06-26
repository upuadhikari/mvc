<?php
namespace App\Model;
$email2=$_SESSION['username'];
$passwd=$_SESSION['pass'];
   // date_default_timezone_set("Asia/Kathmandu"); //If not written then time is according to the localhost server
   // $time=date("h:i:sa");
   
    $servername = "localhost";
    $username = "root";
    $password = NULL;
    $dbname = "project";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to select
    $sql = "SELECT password FROM user WHERE email='$email2';
        ";
    $result = mysqli_query($conn, $sql);



    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($row['password']== $passwd)
            {
              ob_end_flush();
              echo "You are Logged in !";
              
    
               require('userhome.php');
              
    
              //$sql_time="UPDATE userdata SET logged_at='$time' WHERE username='$uname' ;";
             // mysqli_query($conn, $sql_time);
            }
            else{
              echo "The password is Incorrect.";
              return $this->redirect("register\login");
              
              return;
             }
        }
    


    }


