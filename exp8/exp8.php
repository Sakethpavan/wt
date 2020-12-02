<?php
    $user =  $_POST["user"];
    $pass  = $_POST["pass"];
    
    $my_xml = simplexml_load_file("users.xml");

    for($i=0;$i<count($my_xml);$i++)
    {
        if($my_xml->user[$i]->usern == $user && $my_xml->user[$i]->pwd == $pass)
        {
                echo "login successful";
                exit();
        }
    }
    echo "wrong credentials";


?>