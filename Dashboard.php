<?php

    $con = mysqli_connect("localhost", "root", "", "factory");
    session_start();
 ?>
 
 <html>
     <head>
         <title>User's Dashboard</title>
     </head>

     <body>
        <div id = 'd1'>
            <h1>Welcome <?php echo($_SESSION['factory']['mid_name']."&nbsp"); ?></h1>
        </div>

        <div>
            <table>
                <tr>
                    <?php echo($_SESSION['factory'])
                </tr>
            </table>
        </div>
     </body>
</html>