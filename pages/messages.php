
<?php 

require_once("conts.php");
$query = " select * from timed ";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>M.A.</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles/msg.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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


    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class=" bg-custom mt-5">
                    <div class="card=header">
                        <h2 class="display-6 m-3 text-center">Mesages</h2>
                    </div>
                    <div class= "card-body">
                    <table class="table table-striped table-bordered table-hover text-center">
                    <thead class="thead-c">
                     <tr class=" text-light">
                            <td> Username </td>
                            <td> Email </td>
                            <td> Phone</td>
                            <td> Message</td>
                            <td> Date</td>
                            <td> Edit  </td>
                            <td> Delete </td> 
                        </tr>
                        </div>
</thead>
                        <?php 
                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $messages = $row['messages'];
                                    $date = $row['date'];
                        ?>
                                <tr>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $phone?></td>
                                    <td><?php echo $messages?></td>
                                    <td><?php echo $date ?></td>
                                    <td><button type="button" class="btn btn-success editbtn"> EDIT </button></td>
                                    <td><button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                                </tr>        
                        <?php 
                                }  
                        ?>                          
                    </table>
                    
                     <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                  <form action="update.php" method="POST">
                     <div class="modal-body">
                        <input type="hidden" name="update" id="update">
                        
                        <div class="form-group my-3">
                            <label> Username </label>
                            <input name="username" id="username" class="form-control"
                                readonly="readonly">
                        </div>

                        <div class="form-group my-3">
                            <label> Email </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group my-3">
                            <label> Phone </label>
                            <input type="number" name="phone" id="phone" class="form-control"
                                placeholder="Enter Phone">
                        </div>

                        <div class="form-group my-3">
                            <label> Message </label>
                            <input type="text" name="messages" id="messages" class="form-control"
                                placeholder="Enter Message">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary mx-1">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
     <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
     <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete" id="delete">

                        <p> Do you want to delete this Data ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary mx-1"> Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#username').val(data[0]);
                $('#email').val(data[1]);
                $('#phone').val(data[2]);
                $('#messages').val(data[3]);
            });
        });
    </script>

                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
                                