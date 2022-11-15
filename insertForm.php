<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>

    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => petstore
        $conn = mysqli_connect("localhost", "root", "", "petstore");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $full_name=  $_REQUEST['FullName'];
        $petid =  $_REQUEST['petid'];
        $province = $_REQUEST['province'];
        $address = $_REQUEST['address'];
        $email =  $_REQUEST['EMAIL'];
        $phone = $_REQUEST['phone'];
         
        // Performing insert query execution
        $sql = "INSERT INTO adopts VALUES ('$full_name','$petid', '$province',
            '$address','$email','$phone')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thanks for adopting a new member of your family.</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
         
        // Close connection
        mysqli_close($conn);
        ?>

        <center>
            <a href="pet1.html"> Return to Store </a>
    </center>
      
       <!--<center> 
            <h1>View data from Database</h1>
            <form action="view.php" method="get">

            <p><input type="submit" value="view">
    </p> -->
    </form>
    </center>
   </body>
</html>
   