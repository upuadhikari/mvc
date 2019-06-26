<?php
namespace App\Model;
use App\Core\Model as BaseModel;
class allpost extends BaseModel{

    public function showall()
    {
       $sql = "SELECT pcontent FROM npost where pid>0;";
        $result=$this->db->query($sql);
        
        if (mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))
            {   
                ?>
                  <br>
                <div style="background-color: #007bff; color: white; text-align: center;" >
                <?php
                $post=$row['pcontent'];
                echo $post;
                ?>
               </div>
                <div style=" color: white; text-align: center;" >
                        <form method="POST" action="">
                        <input type="text" name="name">
                        <textarea name="message"></textarea>
                        <input type="hidden" name="postId" value="<?php echo $row['pid'] ?>">
                        <button type="submit" class="btn btn-success" name="comment">Comment</button>
                        </form>
                </div>
            

    
            <?php
            }
        }
        
    if (isset($_POST['comment'])) 
            {
             echo "hi";
            }
    mysqli_close($conn);



        $this->db->query($sql);
    }
}
        

    