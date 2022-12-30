<?php
 include "header.php";
 include "sidebar.php";
 if(isset($_GET['thongbao']))
 {
  echo '<script> alert("Đã sửa thành công product có id'.$_GET['thongbao'].'");
  location.href = "products.php";
  </script>';
 }
 if(isset($_GET['thongbaosai']))
 {
  echo '<script> alert("Sửa không thành công product có id'.$_GET['thongbaosai'].'");
  location.href = "products.php";
  </script>';
 }
 if(isset($_GET['thongbaoxoa'])){
  echo '<script> alert("Đã xóa thành công product có id'.$_GET['thongbaoxoa'].'");
  location.href = "products.php";
  </script>';
 }
 if(isset($_GET['thongbaoxoasai'])){
  echo '<script> alert("Xóa không thành công id có id'.$_GET['thongbaoxoasai'].'");
  location.href = "products.php";
  </script>';
 }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
            <a class="btn btn-success" href="project-add.php">ADD</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
         
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 1%">
                          Image
                      </th>
                      <th style="width: 10%">
                          Name
                      </th>
                      <th style="width: 10%">
                          Price
                      </th>
                      <th>
                          Discount
                      </th>
                      <th>
                          Description
                      </th>
                      <th style="width: 8%" class="text-center">
                          Manufractures
                      </th>
                      <th style="width: 8%" class="text-center">
                          Protype
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                if(!isset($_GET['find']))
                {
                $getproduct=$product->getproducts();
                $a=0;
                foreach($getproduct as $value){
                  $a=$value['id'];
                ?>
                  <tr>
                  <td>
                      <?php echo $value['id'] ?>
                      </td>
                      <td>
                         <img style="width:100px" src="../img/<?php echo $value['image'] ?>" alt=""> 
                      </td>
                      <td>
                      <?php echo $value['name'] ?>
                      </td>
                      <td>
                      <?php echo number_format($value['price']).' VND' ?>
                      </td>
                      <td>
                      <?php echo $value['discountproducts'] ?>
                      </td>
                      <td>
                        <textarea name="" id="" cols="30" rows="5"><?php $array = array($value['desciption'],"-Màn hình : ".$value['screen'],"-CPU : ".$value['cpu'],"-RAM : ".$value['ram'],"-Graphics : ".$value['graphics'],"-Osystem : ".$value['osystem']); 
                        foreach ($array as $key => $ee) {
                          echo $ee."&#13;&#10;";
                        }  ?></textarea>
                      </td>
                      <td>
                      <?php echo $value['manu_name'] ?>
                      </td>
                      <td>
                      <?php echo $value['type_name'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $a ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $a ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php }}else
                {
                  $getproduct=$product->getproducts();
                  $a=0;
                  foreach($getproduct as $value){
                    if($value['name']==$_GET['find']){
                      $a=$value['id'];
                  ?>
                    <tr>
                    <td>
                        <?php echo $value['id'] ?>
                        </td>
                        <td>
                           <img style="width:100px" src="../img/<?php echo $value['image'] ?>" alt=""> 
                        </td>
                        <td>
                        <?php echo $value['name'] ?>
                        </td>
                        <td>
                        <?php echo number_format($value['price']).' VND' ?>
                        </td>
                        <td>
                        <?php echo $value['discountproducts'] ?>
                        </td>
                        <td>
                          <textarea name="" id="" cols="30" rows="5"><?php $array = array($value['desciption'],"-Màn hình : ".$value['screen'],"-CPU : ".$value['cpu'],"-RAM : ".$value['ram'],"-Graphics : ".$value['graphics'],"-Osystem : ".$value['osystem']); 
                          foreach ($array as $key => $ee) {
                            echo $ee."&#13;&#10;";
                          }  ?></textarea>
                        </td>
                        <td>
                        <?php echo $value['manu_name'] ?>
                        </td>
                        <td>
                        <?php echo $value['type_name'] ?>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $a ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $a ?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php }}}?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "footer.php";
?>
