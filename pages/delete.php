<?php
$conn = new mysqli("localhost", "root", "");
$conn->select_db("website");

if(isset($_POST['deletedata']))
{
    $username= $_POST['delete'];

    $query = "DELETE FROM timed WHERE username='$username'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:messages.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>