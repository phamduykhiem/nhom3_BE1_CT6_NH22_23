<?php
    require "connect.php";
    if(isset($_GET['uid'])&&isset($_GET['id']))
    {
        $uid = $_GET['uid'];
        $id = $_GET['id'];
        $sql = "DELETE FROM cart WHERE uid = $uid AND id=  $id";
        if($conn->query($sql)===TRUE)
        {
            echo '<script language="javascript" type="text/javascript">
            window.close();
          </script>';
        }
        else
        {
            echo '<script >
            window.close();
          </script>';
        }
    }
?>