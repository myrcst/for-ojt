
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>M.A.</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles/css.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
      </script>
</head>
<body>
   <nav class="navbar navbar-default fixed-top navbar-expand-lg bg-custom">
      <div class="container">
         <div class="collapse navbar-collapse">
            <div class="logo">
               <a href="../index.php">
                  <img src="../img/ma..png" style="width:50px; height:50px;">
               </a>
           </div>
            <div class="d-flex align-items-center mx-auto">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="pi.php">Personal Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contact us.php">Contact Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="messages.php">Messages</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <div class="container">     
    <div class="bg-body-tertiary mt-5 text-center py-2">
       <span class="text-dark text-uppercase text-cus fw-bold fs-1 fst-italic"></span>
       <img src="../img/ma..png" style="width:150px; height:160px;">
    </div>
   </div>
    <div class="container display-flex align-items-center justify-content-center position-relative py-5">
    <div class="form bg-custom">
      <div class="contact-info">
        <h2 class="title fw-bold">Let's get in touch</h2>       
            <p class="fw-bold mt-3">Phone:</p>
            <p>+639565286096</p>
            <p class="fw-bold">Email:</p>
            <p>macosta@usa.edu.ph</p>
            <p class="fw-bold">Address:</p>
            <p>Brgy. Buray, Oton, Iloilo</p>
        <div class="social-media">
          <p class="fst-italic fw-bold">Connect with me :</p>
          <div class="social-icons">
            <a href="https://web.facebook.com/Mhymyyy/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/mctvcst/">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
   
      <div class="contact-form">

        <form action="" method="POST">
          <h3 class="title fw-bold text-light text-center">Contact me</h3>
          <?php 
          session_start();
          if (isset($_POST['username'])){
            if (empty(($_POST['username'] )) || empty(($_POST['email'] )) || empty(($_POST['phone'] )) || empty(($_POST['messages'] ))){
                echo "<p align='center'> <font color=indianred> Please fill up all the fields </p>";
            
         }else{
            $conn = new mysqli("localhost", "root", "");
            $conn->select_db("website");

            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $messages = $_POST["messages"];
            $conn->query("INSERT INTO timed (username, email, phone , messages) Values ('{$username}' , '{$email}' ,'{$phone}' ,'{$messages}' )");
          }
         }
          ?>
          <div class="input-container">
            <input type="text" id="username" name="username" class="input">
            <label for="">Username</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" id="email" name="email" class="input">
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="number" id="phone" name="phone" class="input">
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="messages" id="messages" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          
          <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary fw-bold"  data-bs-toggle="modal" data-bs-target="#feedback">
           Send
         </button>
      </div>
        </form>
      </div>
    </div>
  </div>
   <!--<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h1 class="modal-title fs-5" id="feedbackLabel">Message Submitted</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>-->

  <script src="../scripts/script.js"></script>
</body>
</html>