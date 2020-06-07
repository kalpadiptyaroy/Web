<?php

    $con = mysqli_connect("localhost", "root", "", "stackhack");
    session_start();
    if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['staffbtn']))
    {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];

        $s = mysqli_query($con, "select * from participants where email = '$username'");
        if(mysqli_num_rows($s))
        {       
            $e=mysqli_fetch_array($s);  
            $_SESSION['stackhack'] = $e;
            $actual_pwd = $e['pwd'];
            if($pwd == $actual_pwd)
                header("location:Dashboard.php?msg=success");
            else
            {
                session_abort();
                header("location:Login.html?msg=wrongpass");
            }
        }
        else
        {
            session_abort();
            header("location:Login.html?msg=unsuccess");
        }
    }
    if(isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['adminbtn']))
    {
        if($_POST['username'] == "admin" && $_POST['pwd'] == 8569)
        {
            
            header("location:AdminDashboard.php?msg=loggedInAdmin");
        }
    }
    
?>