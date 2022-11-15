<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
      <center>
         <h1>Adopts</h1>
 
             
<?php 
$link = mysqli_connect("localhost", "root", "", "petstore");
  
if ($link === false) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
  
$sql = "SELECT * FROM adopts";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Full_name</th>";
        echo "<th>PetID</th>";
        echo "<th>Province</th>";
        echo "<th>Address</th>";
         echo "<th>Email</th>";
          echo "<th>Phone</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['Full_name']."</td>";
            echo "<td>".$row['PetID']."</td>";
            echo "<td>".$row['Province']."</td>";
            echo "<td>".$row['Address']."</td>";
             echo "<td>".$row['Email']."</td>";
              echo "<td>".$row['Phone']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }
}

else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link);
}

echo "<h1> Contact us </h1>";
$sql = "SELECT * FROM contactus";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>Message</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Phone']."</td>";
            echo "<td>".$row['Message']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }
}

else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link);
}



mysqli_close($link);
?>

      </center>
   </body>
</html>