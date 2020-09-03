<?php

    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }

    $query= "SELECT * FROM register ";
    $res=mysqli_query($con,$query);

    // while($registration = mysqli_fetch_assoc($res))
    // {
    //     echo "<div>".$registration['firstname']."".$registration['lastname']."".$registration['mobile']."".$registration['password']."".$registration['DOB']."".$registration['address']."".$registration['gender']."".$registration['hobbies']."".$registration['city']."</div>";
      
    // }
    


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <a href="http://localhost/komalproject/crispy_project/registerp.php"><button type="button" class="btn btn-primary">Add User</button></a>

  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>email</th>
        <th>password</th>
        
      </tr>
    </thead>
    <tbody>
     
    <?php while($project = mysqli_fetch_assoc($res)){ ?>
      
      <tr>
        <td><?php echo $project["email"]; ?></td>
        <td><?php echo $project["password"]; ?></td>
        
        <td> <a href="edit_user1.php?id=<?php echo $project["id"]; ?>">Edit</a>   || <a href="delete_user1.php?id=<?php echo $project["id"]; ?>">Delete</a></td>
      </tr>


    <?php } ?>
    
     
    </tbody>
  </table>
</div>

</body>
</html>


