<?php
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

		$sql = "SELECT MAX(postid) AS max_value FROM npost;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                	$postCount=$row["max_value"];
                    $post_id=($row["max_value"]+1);
                }

            }
            elseif ($result->num_rows==0) {
            	$postid=1;
            }
			// sql to insert
			$sql = "INSERT INTO npost
				(userid,postid,pcontent)
				VALUES
				('$u_id', '$post_id',$content')
			;";

			if (mysqli_query($conn, $sql)) {
				
				$last_id = mysqli_insert_id($conn);

			    echo "New post added successfully";
			} else {
			    echo "Error inserting: " . mysqli_error($conn);
			}

			// mysqli_close($conn);
	?>