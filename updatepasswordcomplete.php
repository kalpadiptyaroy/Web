<?php


  if($_POST['submit']=='Send')
  {
                            // Create connection
    $conn = mysqli_connect("localhost", "root", "", "stackhack");
    session_start();
      
                            // Check connection
    if (!$conn) 
      die("Connection failed: ".mysqli_connect_error());


    $new_password=$_POST['password'];
    $email=($_SESSION['stackhack']['email']."&nbsp");

    $sql = "UPDATE participants SET pwd = $new_password WHERE email = '$email'";
    
    if (mysqli_query($conn, $sql)) 
      echo "Record updated successfully";
    else 
      echo "Error updating record: ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>