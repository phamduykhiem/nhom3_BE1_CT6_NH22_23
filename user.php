<?php
 include "header.php";
 include "sidebar.php";
 require "getuser.php";
 $user=new User;
 $getuser=$user->getuser();
 if(isset($_GET['thongbao']))
 {
  echo '<script> alert("Đã sửa thành công user có id'.$_GET['thongbao'].'");
  location.href = "user.php";
  </script>';
 }
 if(isset($_GET['thongbaoxoa']))
 {
  echo '<script> alert("Đã xóa thành công product có id'.$_GET['thongbaoxoa'].'");
  location.href = "user.php";
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
                  <th style="width: 15%">
                          User ID
                      </th>
                      <th style="width: 20%">
                          Fullname
                      </th>
                      <th style="width: 20%">
                          Username
                      </th>
                      <th style="width: 10%">
                          SDT
                      </th>
                      <th style="width: 70%">
                          Email
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody class = "bodyyy">
                <?php
                foreach($getuser as $value){
                ?>
                  <tr>
                  <td>
                        <?php echo $value['uid'] ?>
                      </td>
                      <td>
                        <?php echo $value['fullname'] ?>
                      </td>
                      <td>
                      <?php echo $value['username'] ?>
                      </td>
                      <td>
                      <?php echo $value['sdt'] ?>
                      </td>
                      <td>
                      <?php echo $value['email'] ?>
                      </td>
                      <td class="project-actions text-right">
                           <a class="btn btn-info btn-sm" href="user-edit.php?id=<?php echo $value['uid']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a id = "<?php echo $value['uid']; ?>"  class="btn btn-danger btn-sm dete" href="delete.php?idxoa=<?php echo $value['uid']; ?>" >
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php }?>
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
