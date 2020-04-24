<?php
require("header.php");
require_once("db_connect.php");
$databases = new databases;
if (isset($_POST['upload'])) {
    $ekstensi_valid = array('png','jpg','jpeg');
    $foto = $_FILES['file']['name'];
    $x = explode('.', $foto);
    $ext = strtolower(end($x));
    $img_tmp = $_FILES['file']['tmp_name'];
    if(in_array($ext, $ekstensi_valid) == true ) {
         move_uploaded_file($img_tmp, '/opt/lampp/htdocs/kampus/img/users/'.$foto);
         // echo "<script>alert('wardana')</script>";    
        }else {
            echo "<script>alert('EKSTENSI FILE ILEGAL BRO!')</script>";
        }
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    $nomber = $_POST['phone'];
    $email = $_POST['email'];
    $jabatan = "admin";

    if ($password1 == $password2) {
        $password = password_hash($password1,PASSWORD_DEFAULT);
    } else {
        echo "<script>alert('anjing')</script>";
    }

    if ($databases->register($nama,$username,$password,$nomber,$email,$jabatan,$foto)) {
         echo "<script>alert('Success!')</script>";
     }
}


?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/pp.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="../css/pp.css">
          <script type="text/javascript" src="../js/Form.js"></script>
        </head>
        
        
        <hr>
        <div class="container bootstrap snippet">
            <div class="row">
                  <div class="col-sm-10"><h1>MAKE USER</h1></div>
                <!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
            </div>
           <!-- <div class="col-sm-3">                
            <form method="POST" enctype="multipart/form-data">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail myimg" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" name="file" class="file-upload">
            </div></hr><br>
            </form> -->
                
                </div>
            
                <div class="col-sm-9">
                <form action="makesuer.php" methtod="GET">
                    <ul class="nav nav-tabs active">
                        <li><button data-toggle="tab" value="admin">Admin</button></li>
                        <li><button data-toggle="tab" value="publisher">Publisher</button></li>
                    </ul>
                </form>
        
                      
                  <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <!-- <hr> -->
                          <form class="form" method="post" id="registrationForm" enctype="multipart/form-data" >
                             <div class="col-sm-3">                
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail myimg" alt="avatar">
                                <h6>Upload a different photo...</h6>
                                <input type="file" name="file" class="file-upload">
                            </div></div></hr><br><br><br>
                              <div class="form-group">

                                  <div class="col-xs-6">
                                      <label for="nama"><h4>Name</h4></label>
                                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Name" title="enter Name if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="username"><h4>Username</h4></label>
                                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" title="enter Username if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="phone"><h4>Phone</h4></label>
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Email</h4></label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="password"><h4>Password</h4></label>
                                      <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                      <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                  </div>
                              </div>
                              <div class="form-group">
                                   <div class="col-xs-12">
                                        <br>
                                          <button class="btn btn-lg btn-success" type="submit" name="upload" id="upload"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                           <button class="btn btn-lg btn-primary" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                              </div>
                          </form>
                      
                      <hr>
                      
                     </div><!--/tab-pane-->
                     <!-- <div class="tab-pane" id="messages">
                       
                       <h2></h2>
                       
                       <hr>
                          <form class="form" action="##" method="post" id="registrationForm">
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="nama"><h4>Name</h4></label>
                                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Name" title="enter Name if any.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="username"><h4>Username</h4></label>
                                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" title="enter Username if any.">
                                  </div>
                              </div>
                  
                              <div class="form-group">
                                  <div class="tab-pane" id="messages">
                       
                       <h2></h2>
                       
                       <hr>
                          <form class="form" action="##" method="post" id="registrationForm">
                              <div class="form-group">
                                  
                                  <div class="col-xs-6"
                  
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="email"><h4>Email</h4></label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                  </div>
                              </div>
                              <div class="form-group">
                                
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="password"><h4>Password</h4></label>
                                      <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                  </div>
                              </div>
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                      <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                  </div>
                              </div>
                              <div class="form-group">
                                   <div class="col-xs-12">
                                        <br>
                                          <button class="btn btn-lg btn-success" type="submit" name="upload"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                           <button class="btn btn-lg btn-primary" type="reset"><i class="glyphicon glyphicon-repeat "></i> Reset</button>
                                    </div>
                              </div>
                          </form>
                       
                     </div>/tab-pane -->
    

                   
                                                              
<?php
require("footer.php");
?>