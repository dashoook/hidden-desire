
<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contacts";
    
  // Create connection
  $conn = new mysqli($servername, 
      $username, $password, $dbname);
    
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " 
          . $conn->connect_error);
  }
  $txtName = $_POST['txtName'];
  $txtEmail = $_POST['txtEmail'];
  $txtPhone = $_POST['txtPhone'];
  $txtMessage = $_POST['txtMessage'];   
  
  $sqlquery = "INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `question`)  VALUES 
      ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
    
  if ($conn->query($sqlquery) === TRUE) {
      echo "record inserted successfully";
  } else {
      echo "Error: " . $sqlquery . "<br>" . $conn->error;
  }
  ?>