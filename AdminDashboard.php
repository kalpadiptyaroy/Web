<html>
    <head>
        <title> Admin's Dashboard</title>
        <style>
            #d0
            {
                height: 50px;
                width: auto;
                background-color: crimson;
                color: wheat;
                text-align: center;
            }
            #d1
            {
                height: 25px;
                width: auto;
                background-color: yellow;
                padding-top: 10px;
                padding-left: 10px;
                margin-top: 10px;
            }
        </style>
    </head>

    <body>
        <div id = "d0">
            <h1>
                Participants List
            </h1>
        </div>
        <?php
            $con = mysqli_connect("localhost", "root", "", "stackhack");
            $s = mysqli_query($con, "insert into participants(full_name, mobno, email, pwd, idimage, regtype, tickets, regno) values('', '', '', '', '', '', '', '')");
            $last = mysqli_insert_id($con);          
            for($i = 1; $i < 5; $i++)
            {
                $s = mysqli_query($con, "select * from participants where id = '$i'");
                if($s == false)
                    break;
                $r = mysqli_fetch_array($s);
        ?>
                <div id = "d1">
        <?php        
                echo($i."  ".$r['full_name']."\t".$r['email']);                                       
        ?>
                </div>
        <?php
            }
            $s = mysqli_query($con, "delete from participant where id = '$last'");
        ?>
        
    </body>

</html>