<?php 
require_once("conts.php");
          session_start();
          if (isset($_POST['username'])){
            if (empty(($_POST['username'] )) || empty(($_POST['email'] )) || empty(($_POST['phone'] )) || empty(($_POST['messages'] ))){
                echo "<p align='center'> <font color=indianred> Please fill up all the fields </p>";
            
         }else{
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $messages = $_POST["messages"];
            $con->query("INSERT INTO timed (username, email, phone , messages) Values ('{$username}' , '{$email}' ,'{$phone}' ,'{$messages}' )");
            header("Location:messages.php");
          }
         }
          ?>