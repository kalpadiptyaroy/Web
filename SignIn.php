<?php

    $con = mysqli_connect("localhost", "root", "", "factory");
    session_start();
    if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['staffbtn']))
    {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];

        $s = mysqli_query($con, "select * from staff where email = '$username'");
        if(mysqli_num_rows($s))
        {       $e=mysqli_fetch_array($s);  
            $_SESSION['factory'] = $e;
            header("location:Dashboard.php?msg=success");
        }
        else
        {
            header("location:Login.php?msg=unsuccess");
        }
    }
    if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['adminbtn']))
    {
        if($_POST['username'] == "admin" && $_POST['pwd'] == 8569)
        {
            
            header("location:Dashboard.php?msg=loggedInAdmin");
        }
    }
    
?>