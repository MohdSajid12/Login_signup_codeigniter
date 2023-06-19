<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>


<?php
    $msg = $this->session->flashdata('suc');

    if($msg!=''){
        echo "$msg";
    }

?>

<?php  echo form_open_multipart('Auth/login','','')?>
   
<label for="">Email</label><br>
<input type="email" name="email"><br><br>
<p><?php echo form_error('email');?></p>

<label for="">Password</label><br>
<input type="password" name="password"><br><br>
<p><?php echo form_error('password');?></p>


<button>Login</button> <br><br>

<?php echo form_close()?>


dont have and account <a href="Register">Register</a>
    
</body>
</html>