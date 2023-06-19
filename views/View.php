<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<table border="1">
   <?php 
   foreach($allUser->result() as $user){
   ?>
      <tr>
         <th>Full Name:</th>
         <td><?php echo $user->fullName; ?></td>
      
      
    
         <th>ID:</th>
         <td><?php echo $user->id; ?></td>
      
      
      
         <th>Password:</th>
         <td><?php echo $user->password?></td>
    
      
    
         <th>Email:</th>
         <td><?php echo $user->email; ?></td>
      </tr>
   <?php
   }
   ?>
</table>

</body>
</html>
