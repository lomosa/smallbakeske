<!DOCTYPE html>
<html>
  
<head>
    <title>checkout</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "cake");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $item = $_REQUEST['item'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $name = $_REQUEST['name'];
          
        // Performing insert query execution
        // here our table name is checkout
        $sql = "INSERT INTO checkout  VALUES ('$item', 
            '$email','$address','$phone','$name')";
          
        if(mysqli_query($conn, $sql)){
           
            header("Location: cart.php");

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>