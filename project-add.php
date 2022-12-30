<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['thongbao']))
{
 echo '<script> alert("Thêm thất bại");
 location.href = "project-add.php";
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
            <h1>Project Add</h1>
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
    <form action="add.php" method="post" enctype="multipart/form-data">
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
                <label for="inputName">Name</label>
                <input name="name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputprice">Price</label>
                <input name="price" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputprice">Image</label>
                <input name="image" type="file" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea name="desciption" id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputName">Screen</label>
                <input  name="screen" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">CPU</label>
                <input name="cpu" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">RAM</label>
                <input  name="ram" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Graphics</label>
                <input  name="gra" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Osystem</label>
                <input  name="osystem" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Discount</label>
                <input  name="discount" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputmanufacture">Manufacture</label>
                <select name="manu_id" id="inputmanufacture " class="form-control custom-select">
                  <option selected disabled>Select one</option>
                <?php 
                $getmanu=$product->getmanu();
                foreach($getmanu as $value){
                ?>
                  <option value="<?php echo $value['manu_id'] ?>" ><?php echo $value['manu_name'] ?></option>
                  
                <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select name="type_id" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                <?php 
                $getprotype=$product->getprotype();
                foreach($getprotype as $value){
                ?>
                  <option value="<?php echo $value['type_id']?>"><?php echo $value['type_name'] ?></option>
                <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Feature</label><br>
                <div style="text-align:center"  >
                <input name="feature" id="inputClientCompany" class="form-control" type="checkbox" name="" id="">
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
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
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
