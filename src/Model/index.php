<?php
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

    $sql = "SELECT pcontent FROM npost where pid>0;
                ";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))
            {
                $post=$row['pcontent'];
                echo $post;
            }
        }
        
    
    mysqli_close($conn);

?>