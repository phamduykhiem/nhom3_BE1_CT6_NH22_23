<?php
session_start();
        require "connect.php";
        if(isset($_SESSION['user']))
        {
            $uid = $_SESSION['user'];
            if(isset($_GET['brand']))
            {
                foreach ($_GET['brand'] as $key => $value) {
                    $id =  $value;
                    $sql = "DELETE FROM cart WHERE uid = $uid AND id=  $id";
                    if($conn->query($sql)===TRUE)
                    {
                        
                    }
                    else
                    {
                        echo 'huhu';
                    }
                }
                echo "Xóa thành công";
            }
            else
            {
                echo "sai";
            }
        }
        else{
            echo "saihet";
        }
?>