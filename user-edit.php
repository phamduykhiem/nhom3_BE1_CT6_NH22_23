<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['id']))
{
$gettypeid=$product->getuserid($_GET['id']);

}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update User <?php echo $gettypeid[0]['uid']; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <form action="updateuser.php?id=<?php echo $gettypeid[0]['uid']; ?>" method="post" enctype="multipart/form-data">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Fullname</label>
                <input value="<?php echo $gettypeid[0]['fullname'] ?>" name="name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">UserName</label>
                <input value="<?php echo $gettypeid[0]['username'] ?>" name="user" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">SDT</label>
                <input value="<?php echo $gettypeid[0]['sdt'] ?>" name="sdt" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input value="<?php echo $gettypeid[0]['email'] ?>" name="email" type="text" id="inputName" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
include "footer.php";
 ?>
