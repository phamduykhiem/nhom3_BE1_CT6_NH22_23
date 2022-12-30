<?php
        require "db.php";
        require "config.php";
        include "allproducts.php";
        require "connect.php";
        if(isset($_POST['action']))
{
        if(isset($_POST['typeid']))
        {
            $typeid = $_POST['typeid'];
            $sql = "DELETE FROM protypes WHERE type_id = $typeid";
            if($conn->query($sql)===TRUE)
            {
                $product = new Newproducts;
                 $getprototype=$product->getprotype();
                foreach($getprototype as $value){
                 echo' <tr>
                      <td>
                         <img style="width:100px" src="../img/'.$value['logoProtypes'].'" alt=""> 
                      </td>
                      <td>
                      '.$value['type_name'].'
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a id = "'. $value['type_id'].'"  class="btn btn-danger btn-sm dete" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr> ';}
            }
            else
            {
               echo "Sai";
            }
    }
}
if(isset($_POST['actions']))
{
        if(isset($_POST['manuid']))
        {
            $manuid = $_POST['manuid'];
            $sql = "DELETE FROM manufactures WHERE manu_id = $manuid";
            if($conn->query($sql)===TRUE)
            {
                $product = new Newproducts;
                 $getprototype=$product->getmanu();
                foreach($getprototype as $value){
                 echo' <tr>
                      <td>
                         <img style="width:200px" src="../img/'.$value['logoManu'].'" alt=""> 
                      </td>
                      <td>
                      '.$value['manu_name'].'
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a id = "'. $value['manu_id'].'"  class="btn btn-danger btn-sm dete" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr> ';}
            }
            else
            {
               echo "Sai";
            }
            
    }
}
?>