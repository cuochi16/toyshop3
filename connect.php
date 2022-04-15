<?php
    $severname = "3.132.234.157";
    $username = "btec";
    $password = "123@123a";
    $database = "toyshop(1)";
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
