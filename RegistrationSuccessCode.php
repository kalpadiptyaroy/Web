<?php
    $con = mysqli_connect("localhost", "root", "", "factory");
    session_start();


    if(isset($_POST['email']) && isset($_POST['passwd']) && isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['join_dt']) && isset($_POST['adhrno']) && isset($_POST['fathername']) && isset($_POST['dob']) && isset($_POST['addr']) && isset($_POST['gdr']) && isset($_POST['mar_st']) && isset($_POST['pan']))
    {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $join_dt = $_POST['join_dt'];
        $adhrno = $_POST['adhrno'];
        $dob = $_POST['dob'];
        $addr = $_POST['addr'];
        $gdr = $_POST['gdr'];
        $mar_st = $_POST['mar_st'];
        $pan = $_POST['pan'];
        $fathername = $_POST['fathername'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        $s = mysqli_query($con, "insert into staff(first_name, mid_name, last_name, father_name, join_date, dob, address, aadhar_no, pan_no, marital_status, gender, email, passwd) values('$fname', '$mname', '$lname', '$fathername', '$join_dt', '$dob' ,'$addr', '$adhrno' ,'$pan', '$mar_st', '$gdr', '$email', '$passwd')");
        
        if($s > 0)
        {
            $r = mysqli_query($con, "select * from staff where aadhar_no = '$adhrno'");
            $t = mysqli_fetch_array($r);
            $_SESSION['factory'] = $r;
           header("location:RegistrationComplete.php?msg=done");
        }
        else
           header("location:Login.php?msg=not done");
    }



?>