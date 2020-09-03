<?php

    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }

    $query= "SELECT * FROM menu ";
    $res=mysqli_query($con,$query);

    


    
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
  <a href="http://localhost/komalproject/crispy_project/Menu1.php"><button type="button" class="btn btn-primary">Add menu</button></a>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>title</th>
        <th>recipe_discription</th>
        <th>price</th>
       
      </tr>
    </thead>
    <tbody>
     
    <?php while($project = mysqli_fetch_assoc($res)){ ?>
      
      <tr>
        <td><?php echo $project["title"];?></td>
        <td><?php echo $project["recipe_discription"]; ?></td>
        <td><?php echo $project["price"]; ?></td>
        <td> <a href="edit_menu.php?id=<?php echo $project["id"]; ?>">Edit</a>   || <a href="delete_menu.php?id=<?php echo $project["id"]; ?>">delete</a></td>
      </tr>


    <?php } ?>
    
     
    </tbody>
  </table>
</div>

</body>
</html>
