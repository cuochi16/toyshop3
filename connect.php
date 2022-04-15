<?php
    $severname = "3.132.234.157";
    $username = "huy2002";
    $password = "huy2002";
    $database = "toyshop";
    //Khai báo biến để kết nỗi CSDL
    $connect = new mysqli($severname,$username,$password,$database);
    //$connect = new mysqli_connect ----> Hướng Thủ Tục
    if(!$connect)
        {
            echo "Connect Failed!";
        }
        else
        {
            
        }

?>
