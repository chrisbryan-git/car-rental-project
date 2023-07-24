<?php
session_start();

if(isset($_POST['customer']))
{
    $username=$_POST['name'];
    $address=$_POST['address'];
    $age=$_POST['username'];
    $no_ofdays=$_POST['days'];
    
    
    
    $db =mysqli_connect('127.0.0.1','root','','booking_db');
    if($db==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $insert="INSERT INTO `services`(`username`, `address`, `age`, `no of days`) VALUES ('$username','$address','$age','$no_ofdays')";
            $row=mysqli_query($db,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Registered Successfully");
                window.open('details.php','_self');</script>
            <?php
                $_SESSION['username']=$username;
                $_SESSION['address']=$address;
                
                $_SESSION['days']=$no_ofdays;
                
            }
            else{
                echo "error";
            }
         }        
}
?>