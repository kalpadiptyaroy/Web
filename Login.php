<html>

<head>
    <title> Staff Management Portal </title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <style>
        h1 {
            font-family: 'Quicksand', sans-serif;
        }

        #d1 {
            height: 100px;
            width: auto;
            background-color: blueviolet;
            padding-top: 10px;
            color: antiquewhite;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        #d3
        {
            height: 440px;
            width: 800px;
            background-color: darkgoldenrod;
            float: right;
            color: white;
            padding-top: 6px;
            border-bottom-right-radius: 30px;
        }

        #d4
        {
            height: 436px;
            width: 600px;
            background-color: chocolate;
            color: white;
            padding-top: 10px;
            border-bottom-left-radius: 30px;
        }

        #box1
        {
            text-align: center;
            border-style:none;
            background-color: white;
            height: 35px;
            width: 250px;
            border-radius: 25px;
            margin-top: 10px;
            margin-left: 5px;
        }
        input[type='submit']
        {
            height: 35px;
            width: 150px;
            margin-top: 10px;
            margin-left: 10px;
            background-color: green;
            border-style: none;
            color: white;
        }
        #box2
        {
            text-align: center;
            border-style:none;
            background-color: white;
            height: 35px;
            width: 510px;
            border-radius: 25px;
            margin-top: 10px;
            margin-left: 5px;
            padding-top: 5px;
            float: left;
        }

        #d2 tr
        {
            padding: 10px;
        }

        #t1
        {
            color: white;
            font-family: 'Quicksand', sans-serif;
            font-size: medium;
        }

        select
        {
            height: 30px;
            width: 200px;
            margin:10px;
            border-style: none;
        }
    </style>
</head>

<body>
    <div id="d1" align="center">
        <h1> Welcome to the Staff Management Portal </h1>
    </div>
    <div id="d2">
        <div id = "d3" align = "center">
            <h1>Registration</h1>

            <form method = "POST" action = "RegistrationSuccessCode.php">
                <table id = "t1">
                    <tr>
                        <td> <input id = "box1" type = "text" name = "fname" placeholder="First Name"/> </td>
                        <td> <input id = "box1" type = "text" name = "mname" placeholder="Middle Name"/> </td>
                        <td> <input id = "box1" type = "text" name = "lname" placeholder="Last Name"/> </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"> Joining Date <input id = "box1" type="date" name ="join_dt" /> </td>
                        <td><input id = "box1" type="text" name = "adhrno" placeholder="Aadhar Number"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> Date of Birth <input id = "box1" type="date" name ="dob"/> </td>
                        <td> <input id = "box1" type="text" name = "fathername" placeholder="Father's Name"/> </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"> <textarea id = "box2" name = "addr" placeholder="Full Address"></textarea> </td>
                        <td> <input id="box1" type = "text" name = "pan" placeholder="PAN No."> </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center"> 
                            Select Gender
                            <select name ="gdr">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        
                            Marital Status
                            <select name = "mar_st">
                                <option> Married </option>
                                <option> Unmarried </option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type= "text" name="email" id="box1" placeholder="Enter E-mail"/>
                        </td>

                        <td>
                            <input type="password" name = "passwd" id = "box1" placeholder="Enter Password"/>
                        </td>
                    </tr>
                   
                    <tr>
                        <td colspan="3" align="center"><input type = "submit" value="Register" name="reg"> </td>
                    </tr>
                </table>
            </form>
        </div>
        <div id = "d4" align = "center">
            <h1>Sign In</h1>
            <form method = "post" action = "SignIn.php">
                <table align="center">
                    <tr>
                        <td colspan="2" align="center"> <input id = "box1" type="text" name="username" placeholder="Username" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> <input id = "box1" type="password" name="pwd" placeholder="Password" /> </td>
                    </tr>
                    <tr>
                        <td align="center" > <input name = "staffbtn"  type="submit" value="Log In as Staff" /> </td>
                        <td align="center" > <input name = "adminbtn"  type="submit" value="Log In as Admin"/> </td>
                    </tr>
                </table>
            </form>
        </div>        
    </div>
</body>

</html>