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
        $name=  $_REQUEST['name'];
        $email =  $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $message =  $_REQUEST['message'];
         
        // Performing insert query execution
        $sql = "INSERT INTO contactus VALUES ('$name','$email', '$phone',
            '$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for reaching out. We will contact you shortly.</h3>";
 
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
        <!---<center>
            <h1>View data from Database</h1>
            <form action="view.php" method="get">

            <p><input type="submit" value="view">   
    </p> -->
    </form>
    </center>
   </body>
</html>