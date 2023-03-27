<?php
$conn = new mysqli("localhost", "root", "");
$conn->select_db("website");

    if(isset($_POST['updatedata']))
    {   
        $username = $_POST['update'];
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $messages = $_POST['messages'];

        $query = "UPDATE timed SET username='$username', email='$email', phone='$phone', messages=' $messages' WHERE username='$username'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:messages.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>