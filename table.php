<?php

  $db_host ="localhost";
  $db_user="root";
  $db_password="";
  $db_name="test_db";

  $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
  if (!$conn) {
  	# code...
  	die("connection failed");
  }
  echo "connected sucessfully <hr>";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Table</title>
  </head>
  <body>
    <div class="container">
    	<h1>Retreive data from database.</h1>
    	<?php
    	  $sql = "SELECT * FROM student";
    	  $result = mysqli_query($conn,$sql);
    	  if (mysqli_num_rows($result)>0) {
    	  	# code...
    	  	echo '<table class="table">';
    	  	echo "<thead>";
    	  	 echo "<tr>";
    	  	  echo "<th>ID</th>";
    	  	  echo "<th>Name</th>";
    	  	  echo "<th>Roll</th>";
    	  	  echo "<th>Address</th>";
    	  	  echo "</tr>";
    	  	  echo "</thead>";
    	  	  echo "<tbody>";
    	  	    while ($row= mysqli_fetch_assoc($result)) {
    	  	    	echo "<tr>";
    	  	    	  echo "<td>".$row["id"]."</td>";
    	  	    	  echo "<td>".$row["name"]."</td>";
    	  	    	  echo "<td>".$row["roll"]."</td>";
    	  	    	  echo "<td>".$row["address"]."</td>";
    	  	    	echo "</tr>";  
    	  	    	# code...
    	  	    }
    	  	    echo "</tbody>";
    	  	    echo '</table>';
    	  }
    	  else{
    	  	echo "0 result";
    	  }
    	?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
