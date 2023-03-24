<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'form');


if(isset($_POST['submit']))
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messages = $_POST['messages'];


    $query = "INSERT INTO res (`username`, `email`,`phone` ,`messages`) VALUES ('$username', '$email', '$phone', '$messages')";
    $query_run = mysqli_query($connection, $query);

}



?>
