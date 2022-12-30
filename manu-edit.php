<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['id']))
{
$gettypeid=$product->getmanuid($_GET['id']);

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manu Update</h1>
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
    <form action="updatemanu.php?id=<?php echo $gettypeid[0]['manu_id']; ?>" method="post" enctype="multipart/form-data">
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
                <label for="inputName">ManuName</label>
                <input value="<?php echo $gettypeid[0]['manu_name'] ?>" name="name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">  
                <label for="inputprice">Image</label>
                <input  name="image" type="file" id="inputName" class="form-control">
                <img style="width:50px" src="../img/<?php echo $gettypeid[0]['logoManu'] ?>" alt="">
              </div>
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
          <input type="submit" value="Update manu" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
}
include "footer.php";
 ?>
