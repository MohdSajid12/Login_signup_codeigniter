<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Registeration Form</h2>

    <?php
    $msg = $this->session->flashdata('msg');

    if($msg!=''){
        echo "$msg";
    }

?>


 <?php  echo form_open_multipart('Auth/myfile','','')?>
   

   
   <label for="">Name</label><br>
   <input type="text" name="name" id="" placeholder="Enter your name" value="<?php echo set_value('name')?>"><br><br>
   <p><?php echo form_error('name');?></p>
  
   <label for="">Email</label><br>
   <input type="text" name="email" id="" placeholder="Enter your email"><br><br>
   <p><?php echo form_error('email');?></p>

   <label for="">Phone</label><br>
   <input type="text" name="phone" id="" placeholder="Enter your phone"><br><br>
   <p><?php echo form_error('phone');?></p>

   <label for="">Password</label><br>
   <input type="password" name="password" id="" placeholder="Enter your password"><br><br>
   <p><?php echo form_error('password');?></p>

   


   <button class="btn">Register </button><br><br>
      <?php echo form_close()?>

      
      Alredy have and account? <a href="login">Login</a>

    
      
</body>
</html>