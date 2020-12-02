<?php
    $user =  $_POST["user"];
    $pass  = $_POST["pass"];
    
    if($user && $pass)
    {
        $con = mysqli_connect("localhost","root","","CSE");
        $query = mysqli_query($con,"SELECT * FROM login WHERE
                                    user ='$user' AND pass ='$pass'");

        $numrows= mysqli_num_rows($query);
        if($numrows!=0)
            echo "Hello ".$user;
        else
            echo "user doesnot exist!";
    }
    else
        die("please enter a username and password");
?>